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


/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/', 'welcome') -> name ('apodoInicio');
Route::view('/form', 'formulario') -> name ('apodoFormulario');
Route::view('/lo-que-quiero-olvidar', 'recuerdos') -> name ('apodoRecuerdos');

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('formulario');
});

Route::get('/lo-que-quiero-olvidar', function () {
    return view('recuerdos');
}); */

Route::get('v1', function () {
    return view('vista1');
});