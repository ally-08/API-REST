<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return "hola prueba 1";
});

Route::get('/usuarios', 'App\Http\Controllers\UsuarioController@index');
Route::post('/usuarios/create', 'App\Http\Controllers\UsuarioController@store');
Route::put('/usuarios/update/{id}', 'App\Http\Controllers\UsuarioController@update');
Route::delete('/usuarios/delete/{id}', 'App\Http\Controllers\UsuarioController@destroy');
Route::patch('/usuarios/patch/{id}', 'App\Http\Controllers\UsuarioController@update');