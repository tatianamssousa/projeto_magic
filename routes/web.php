<?php

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
Route::resource('/usuarios', 'UsuarioController');
Route::resource('/usuario-cartas','UsuarioCartaController');
Route::resource('/cartas', 'CartaController');
Route::resource('/raridades', 'RaridadeController');
Route::resource('/edicoes', 'EdicaoController');
Route::resource('/ilustradores', 'IlustradorController');
Route::resource('/tipos', 'TipoController');
Route::resource('/supertipos', 'SupertipoController');
Route::resource('/subtipos', 'SubtipoController');
Route::resource('/linguas', 'LinguaController');
Route::resource('/estados', 'EstadoController');
