<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;
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
    return view('principal');
});

Route::get('/register', function () {
    return view('registro');
});

Route::get('/new', function () {
    return view('nueva');
}); */

/* Rutas individuales para controlador */

Route::get('/',[registroController::class, 'metodoPrincipal']) -> name ('ElPrincipal');
Route::get('/register',[registroController::class, 'metodoRegistro']) -> name ('ElRegistro');

//Rutas para el request POST del recuerdo
Route::post('/guardarRegistro',[registroController::class, 'guardarRegistro']) -> name ('guardar');
