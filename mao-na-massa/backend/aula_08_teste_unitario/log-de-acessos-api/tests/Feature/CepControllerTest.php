<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CepControllerTest extends TestCase
{
    /** @test */
    public function deve_retornar_dados_de_um_cep_valido()
    {
        // Mock da API ViaCEP
        Http::fake([
            'viacep.com.br/*' => Http::response([
                'cep' => '85010000',
                'logradouro' => 'Rua Exemplo',
                'bairro' => 'Centro',
                'localidade' => 'Guarapuava',
                'uf' => 'PR',
                'ddd' => '42'
            ], 200),
        ]);

        $response = $this->get('/cep/85010000');

        $response->assertStatus(200);
        $response->assertSee('Guarapuava');
    }

    /** @test */
    public function deve_retornar_erro_para_cep_invalido()
    {
        Http::fake([
            'viacep.com.br/*' => Http::response(null, 404),
        ]);

        $response = $this->get('/cep/00000000');

        $response->assertStatus(200); // ainda renderiza a view
        $response->assertSee('CEP não encontrado');
    }
}
