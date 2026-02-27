<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaudacaoController extends Controller
{
        public function exibirMensagem()
    {
        // Retorna uma string diretamente
        return "Olá do SaudacaoController! Que bom te ver aqui.";
    }

}
