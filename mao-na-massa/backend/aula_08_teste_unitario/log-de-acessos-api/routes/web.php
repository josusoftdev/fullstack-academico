<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;
use App\Http\Middleware\LogAcessos;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/cep/{cep}', [CepController::class, 'buscar'])->middleware(LogAcessos::class);



