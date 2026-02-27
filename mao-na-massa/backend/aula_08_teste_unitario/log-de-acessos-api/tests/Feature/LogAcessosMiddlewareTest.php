<?php

namespace Tests\Feature;

use App\Models\Acesso;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogAcessosMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function deve_registrar_um_log_ao_acessar_uma_rota()
    {
        // Faz uma requisição GET
        $response = $this->get('/');

        // Verifica resposta
        $response->assertStatus(200);

        // Verifica se o log foi salvo no banco
        $this->assertDatabaseCount('acessos', 1);
        $this->assertDatabaseHas('acessos', [
            'metodo' => 'GET',
            'status_code' => 200,
        ]);
    }
}
