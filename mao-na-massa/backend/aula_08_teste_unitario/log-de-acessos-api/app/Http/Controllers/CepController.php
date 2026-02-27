<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function buscar(string $cep)
    {
       $response = Http::withoutVerifying()->get("https://viacep.com.br/ws/{$cep}/json/");

        // Verifica se a requisição foi bem-sucedida (status 200)
        if ($response->successful()) {
            // Decodifica o JSON e o armazena em uma variável
            $dados = $response->json();

            // Retorna a view, passando os dados do CEP para ela
            return view('cep.show', ['dados' => $dados]);
        }

        // Retorna a view de erro se a requisição falhar
        return view('cep.error');
    }
}
