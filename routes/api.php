<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::name('api.')->group(function ($route){
    $route->resource('/usuarios', 'UsuarioController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/usuario-cartas', 'UsuarioCartaController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/cartas', 'CartaController');
});
Route::name('api.')->group(function($route){
    $route->resource('/raridades', 'RaridadeController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/edicoes', 'EdicaoController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/ilustradores', 'IlustradorController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/tipos', 'TipoCntroller');
});
Route::name('api.')->group(function ($route){
    $route->resource('/supertipos', 'SupertipoController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/subtipos', 'SubtipoController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/linguas', 'LinguaController');
});
Route::name('api.')->group(function ($route){
    $route->resource('/estados', 'EstadoController');
});
