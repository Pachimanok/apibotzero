<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Impresion de PDF */

Route::get('/imprimirCarga','App\Http\Controllers\crearpdfController@carga'); 
Route::get('/imprimirVacio','App\Http\Controllers\crearpdfController@vacio');  
Route::get('/imprimirEviarInstrucivo/{cntr}','App\Http\Controllers\crearpdfController@cargaPorMail');  


/* Envio de Emails */

Route::get('/mailPrueba','App\Http\Controllers\emailController@prueba');  
Route::get('/mailStatus/{cntr}/{empresa}/{booking}/{user}/{tipo}','App\Http\Controllers\emailController@cambiaStatus');  
Route::get('/cargaAsignada/{id}','App\Http\Controllers\emailController@cargaAsignada');  


// Route::post('/imprimir/create','App\Http\Controllers\crearpdfControllerPDF@store')mostrar todos
// Route::get('/imprimirIns','App\Http\Controllers\imprimirPDF@store'); //mostrar todos
//Route::put('/imprimir/{id}','App\Http\Controllers\imprimirPDF@update');//actualizar
//Route::delete('/imprimir','App\Http\Controllers\imprimirPDF@destroy'); // eliminar

////////////////// DOCUMENTS ///////////////////

//////// USUARIOS INTERNOS ////////

Route::post('/docs/{booking}','App\Http\Controllers\DocumentController@store');
Route::get('/docsCntr/{booking}/{user}/{cntr}','App\Http\Controllers\DocumentController@indexCntr');
Route::get('/docsDel','App\Http\Controllers\DocumentController@destroy'); 

//////// USUARIOS EXTERNOS ////////

Route::get('/docsAtaReed/{booking}/{user}','App\Http\Controllers\DocumentController@index');
Route::post('/docsAta/{booking}','App\Http\Controllers\DocumentController@storeAta');


 // TRUCK CONTROLLLER 
Route::post('/truck','App\Http\Controllers\TruckController@store'); // C
Route::get('/trucks/{customer}','App\Http\Controllers\TruckController@index');// R ALL
Route::get('/truck/{truck}','App\Http\Controllers\TruckController@show'); // R ONE
Route::post('/truck/{truck}','App\Http\Controllers\TruckController@update'); // U 
Route::delete('/truck/{truck}','App\Http\Controllers\TruckController@destroy'); // D 

// TRAILER CONTROLLLER 
Route::post('/trailer','App\Http\Controllers\TrailerController@store'); // C
Route::get('/trailer/{customer}','App\Http\Controllers\TrailerController@index');// R ALL
Route::get('/trailer/{trailer}','App\Http\Controllers\TrailerController@show'); // R ONE
Route::post('/trailer/{trailer}','App\Http\Controllers\TrailerController@update'); // U
Route::delete('/trailer/{trailer}','App\Http\Controllers\TrailerController@destroy'); // D


Route::get('/user/{user}','App\Http\Controllers\UserController@show');


