<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CepViewTest extends TestCase
{
    /** @test */
    public function view_show_exibe_dados_do_cep()
    {
        Http::fake([
            'viacep.com.br/*' => Http::response([
                'cep' => '85010000',
                'logradouro' => 'Rua Teste',
                'bairro' => 'Bairro Teste',
                'localidade' => 'Cidade Teste',
                'uf' => 'PR',
                'ddd' => '42'
            ], 200),
        ]);

        $response = $this->get('/cep/85010000');

        $response->assertSee('Detalhes do CEP');
        $response->assertSee('Rua Teste');
    }
}

