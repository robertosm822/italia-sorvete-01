<?php

use Illuminate\Support\Facades\Route;


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

//rotas para melhorar
Route::get('clientes', 'App\Http\Controllers\ClientesController@index');
Route::get('clientes/listar', 'App\Http\Controllers\ClientesController@listar');
