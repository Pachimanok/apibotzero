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
// Route::put('/imprimir/{id}','App\Http\Controllers\imprimirPDF@update');//actualizar
// Route::delete('/imprimir','App\Http\Controllers\imprimirPDF@destroy'); // eliminar

////////////////// DOCUMENTS ///////////////////

//////// USUARIOS INTERNOS ////////

Route::post('/docs/{booking}','App\Http\Controllers\DocumentController@store');
Route::get('/docsCntr/{booking}/{user}/{cntr}','App\Http\Controllers\DocumentController@indexCntr');
Route::get('/docsDel','App\Http\Controllers\DocumentController@destroy'); 

//////// USUARIOS EXTERNOS ////////

Route::get('/docsAtaReed/{booking}/{user}','App\Http\Controllers\DocumentController@index');
Route::post('/docsAta/{booking}','App\Http\Controllers\DocumentController@storeAta');
Route::post('/carga','App\Http\Controllers\LoadController@store');

 // TRUCK CONTROLLLER 
Route::post('/truck','App\Http\Controllers\TruckController@store'); // C
Route::get('/trucks/{customer}','App\Http\Controllers\TruckController@index');// R ALL
Route::get('/truck/{truck}','App\Http\Controllers\TruckController@show'); // R ONE
Route::post('/truck/{truck}','App\Http\Controllers\TruckController@update'); // U 
Route::delete('/truck/{truck}','App\Http\Controllers\TruckController@destroy'); // D 
Route::get('/truckTransport/{truck}','App\Http\Controllers\TruckController@showTransport'); // Show For Transport


// TRAILER CONTROLLLER 
Route::post('/trailer','App\Http\Controllers\TrailerController@store'); // C
Route::get('/trailer/{customer}','App\Http\Controllers\TrailerController@index');// R ALL
Route::get('/trailer/{trailer}','App\Http\Controllers\TrailerController@show'); // R ONE
Route::post('/trailer/{trailer}','App\Http\Controllers\TrailerController@update'); // U
Route::delete('/trailer/{trailer}','App\Http\Controllers\TrailerController@destroy'); // D
Route::get('/trailerTransport/{transport_id}','App\Http\Controllers\TrailerController@showTrailer'); // Show for Transport

// ASIGNACIONES
Route::get('/truckAsign/{id}','App\Http\Controllers\TruckController@trailerAsign'); // Show for Transport

// DRIVER CONTROLLLER trailerAsign

Route::get('/drivers/{transport_id}','App\Http\Controllers\DriverController@showDriver'); // Show for Transport
Route::get('/user/{user}','App\Http\Controllers\UserController@show');

// EXPORT EXCEL

// Reportes de Cargas por fechas

Route::get('/excelCargasThisWeek','App\Http\Controllers\excelController@thisWeek');
Route::get('/excelCargasUncoming','App\Http\Controllers\excelController@uncoming');
Route::get('/excelCargasPast','App\Http\Controllers\excelController@past');

// Reportes por Status
Route::get('/excelNoAssigned','App\Http\Controllers\excelController@noAssigned');
Route::get('/excelOnBoard','App\Http\Controllers\excelController@onBoard');
Route::get('/excelAnyProblem','App\Http\Controllers\excelController@anyProblem');
Route::get('/excelFinish','App\Http\Controllers\excelController@loadFinish');
Route::get('/excelGoingToLoad','App\Http\Controllers\excelController@goingToLoad');
Route::get('/excelLoading','App\Http\Controllers\excelController@loading');
Route::get('/excelOnCustomPlace','App\Http\Controllers\excelController@onCustomPlace');
Route::get('/excelOnWay','App\Http\Controllers\excelController@onWay');
Route::get('/excelAllLoads','App\Http\Controllers\excelController@allLoads');
Route::get('/excelStacking','App\Http\Controllers\excelController@stacking');
Route::get('/excelAssigned','App\Http\Controllers\excelController@assigned');
Route::get('/excelAssigned','App\Http\Controllers\excelController@assigned');

// Reportes de DB Select

Route::get('/excelAgencies','App\Http\Controllers\excelController@agencies');
Route::get('/excelAtas','App\Http\Controllers\excelController@atas');
Route::get('/excelPaymentMode','App\Http\Controllers\excelController@paymentMode');
Route::get('/excelUsers','App\Http\Controllers\excelController@users');
Route::get('/excelCustomAgents','App\Http\Controllers\excelController@customAgents');
Route::get('/excelCompanies','App\Http\Controllers\excelController@companies');
Route::get('/excelWarehouseContainer','App\Http\Controllers\excelController@warehouseContainer');
Route::get('/excelContainerTypes','App\Http\Controllers\excelController@containerTypes');

// Reportes Flotas
Route::get('/excelDriversFree','App\Http\Controllers\excelController@driversFree');
Route::get('/excelDriversBusy','App\Http\Controllers\excelController@driversBusy');
Route::get('/excelDrivers','App\Http\Controllers\excelController@drivers');
Route::get('/excelTrucks','App\Http\Controllers\excelController@trucks');
Route::get('/excelTrailers','App\Http\Controllers\excelController@trailers');
Route::get('/excelTransports','App\Http\Controllers\excelController@transports');

// SEGUROS

Route::post('/seguro','App\Http\Controllers\seguroController@store');

// MAPS
Route::get('/lugarDeCarga/{patente}','App\Http\Controllers\lugaresDeCarga@coordenadas');
Route::get('/accionLugarDeCarga/{idTrip}','App\Http\Controllers\lugaresDeCarga@accionLugarDeCarga');
Route::get('/accionLugarAduana/{idTrip}','App\Http\Controllers\lugaresDeCarga@accionLugarAduana');
Route::get('/accionLugarDescarga/{idTrip}','App\Http\Controllers\lugaresDeCarga@accionLugarDescarga');

Route::get('/servicioSatelital','App\Http\Controllers\ServiceSatelital@serviceSatelital');
Route::get('/pruebaSatelital','App\Http\Controllers\satelitalPruena@comparaCoordendas');


//RUTAS NUEVAS

//User
Route::get('/users','App\Http\Controllers\UserController@index'); // Busca los users con el permiso seleccionado
Route::get('/usersPermiso/{permiso}','App\Http\Controllers\UserController@usersPermiso'); // Busca los users con el permiso seleccionado

//Empresas
Route::get('/empresas','App\Http\Controllers\EmpresaController@index'); //Busca todas las empresas
Route::get('/empresa/{id}','App\Http\Controllers\EmpresaController@show'); //Busca una empresa por el id
Route::post('/empresa','App\Http\Controllers\EmpresaController@store'); //Crea un cliente
Route::put('/empresa/{id}','App\Http\Controllers\EmpresaController@update');//Actualizar datos de un cliente
Route::delete('/empresa/{id}','App\Http\Controllers\EmpresaController@destroy');//Eliminar un cliente

//Modos de Pago
Route::get('/modoPago','App\Http\Controllers\PayModeController@index'); //Busca todos los modos de pago
Route::get('/modoPago/{id}','App\Http\Controllers\PayModeController@show'); //Busca un modo de pago
Route::post('/modoPago','App\Http\Controllers\PayModeController@store'); //Crea un nuevo modo de pago
Route::put('/modoPago/{id}','App\Http\Controllers\PayModeController@update'); //Actualiza los datos de un modo de pago
Route::delete('/modoPago/{id}','App\Http\Controllers\PayModeController@destroy'); //Elimina un modo de pago

//Plazo de Pago
Route::get('/plazoPago','App\Http\Controllers\PayTimeController@index'); //Busca todos los plazos de pago
Route::get('/plazoPago/{id}','App\Http\Controllers\PayTimeController@show'); //Busca un plazo de pago
Route::post('/plazoPago','App\Http\Controllers\PayTimeController@store'); //Crea un nuevo plazo de pago
Route::put('/plazoPago/{id}','App\Http\Controllers\PayTimeController@update'); //Actualiza los datos de un plazo de pago
Route::delete('/plazoPago/{id}','App\Http\Controllers\PayTimeController@destroy'); //Elimina un plazo de pago

//Transporte
Route::get('/transporteCustomer/{id}','App\Http\Controllers\TransporteController@indexTransporteCustomer'); //Busca todos los transportes del customerId
Route::get('/transporte/{id}','App\Http\Controllers\TransporteController@show'); //Busca un transporte
Route::post('/transporte','App\Http\Controllers\TransporteController@store'); //Crea un nuevo transporte
Route::put('/transporte/{id}','App\Http\Controllers\TransporteController@update'); //Actualiza los datos de un plazo de pago
Route::delete('/transporte/{id}','App\Http\Controllers\TransporteController@destroy'); //Elimina un plazo de pago

//Carga
Route::get('/carga/{status}', 'App\Http\Controllers\CargaController@indexStatus');
Route::get('/cargaEmpresa/{empresa}/{status}','App\Http\Controllers\CargaController@indexStatusEmpresa');

//Ata
Route::get('/atas','App\Http\Controllers\AtaController@index'); //Busca todos los Agente de transporte
Route::get('/ata/{id}','App\Http\Controllers\AtaController@show'); //Busca un Agente de transporte
Route::post('/ata','App\Http\Controllers\AtaController@store'); //Crea un nuevo Agente de transporte
Route::put('/ata/{id}','App\Http\Controllers\AtaController@update'); //Actualiza los datos de un Agente de transporte
Route::delete('/ata/{id}','App\Http\Controllers\AtaController@destroy'); //Elimina un Agente de transporte

//Agencia
Route::get('/agencias','App\Http\Controllers\AgenciaController@index'); //Busca todas las agencias
Route::get('/agencia/{id}','App\Http\Controllers\AgenciaController@show'); //Busca una sola agencia
Route::post('/agencia','App\Http\Controllers\AgenciaController@store'); //Crea una nueva Agencia
Route::put('/agencia/{id}','App\Http\Controllers\AgenciaController@update'); //Actualiza los datos de una Agencia
Route::delete('/agencia/{id}','App\Http\Controllers\AgenciaController@destroy'); //Elimina una Agencia

//Deposito de Retiro
Route::get('/depositoRetiros','App\Http\Controllers\DepositoDeRetiroController@index'); //Busca todos los depositos de retiro
Route::get('/depositoRetiro/{id}','App\Http\Controllers\DepositoDeRetiroController@show'); //Busca un deposito de retiro
Route::post('/depositoRetiro','App\Http\Controllers\DepositoDeRetiroController@store');  //Crea un nuevo deposito de retiro
Route::put('/depositoRetiro/{id}','App\Http\Controllers\DepositoDeRetiroController@update'); //Actualiza los datos de un deposito de retiro
Route::delete('/depositoRetiro/{id}','App\Http\Controllers\DepositoDeRetiroController@destroy'); //Elimina un deposito de retiro