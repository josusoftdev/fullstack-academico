<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaudacaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rota simples que retorna uma string
Route::get('/ola', function () {
    return "Olá, Mundo do Laravel!";
});

// Rota que retorna uma view simples, passando um dado
Route::get('/minha-view', function () {
    $nome = "Aluno";
    return view('minha-primeira-view', ['nomeUsuario' => $nome]);
});

// Rota que chama um método de um Controller
Route::get('/saudacao-controller', [SaudacaoController::class, 'exibirMensagem']);

// Rota com parâmetro
Route::get('/usuario/{id}', function ($id) {
    return "Detalhes do Usuário ID: " . $id;
});

// Rota com parâmetro e passando para a view
Route::get('/bem-vindo/{nome}', function ($nome) {
    return view('bem-vindo', ['nome' => $nome]);
});


