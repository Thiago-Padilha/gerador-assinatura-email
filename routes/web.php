<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\AssinaturaController;

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

// Rota inicial
Route::get('/', function () {
    return view('home');
});



// Rota para gerar assinatura
Route::get('/assinatura', [AssinaturaController::class, 'gerarAssinatura'])->name('assinatura');

/* 
   PARA RODAR LOCALMENTE BASTA COMENTAR O CAMPO ABAIXO 
*/

// Força o esquema HTTPS
URL::forceScheme('https');
