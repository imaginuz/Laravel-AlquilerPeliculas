<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta Principal
Route::get('/home', function () {
    return view('home');
});


// Rutas para Modulo Cliente
Route::resource('/cliente','App\Http\Controllers\ControllerCliente');

// Rutas para Modulo Pelicula
Route::resource('/pelicula','App\Http\Controllers\ControllerPelicula');

// Rutas para Modulo Alquiler
Route::resource('/alquiler','App\Http\Controllers\ControllerAlquiler');

