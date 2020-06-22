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
Route::prefix('/funcionarios')->name('funcionarios.')->group(function(){
    Route::get('/', 'FuncionariosController@index');
    Route::get('/cadastrar', 'FuncionariosController@create');
    Route::get('/visualizar/{id}', 'FuncionariosController@show');
    Route::get('/alterar/{id}', 'FuncionariosController@change');
    Route::post('/salvar', 'FuncionariosController@save');
    Route::post('/atualizar', 'FuncionariosController@update');
    Route::post('/pesquisar', 'FuncionariosController@search');

});

