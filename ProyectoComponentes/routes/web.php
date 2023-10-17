<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

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

/* Rutas individuales para controlador */

Route::get('/',[diarioController::class, 'metodoInicio']) -> name ('ElInicio');
Route::get('/form',[diarioController::class, 'metodoFormulario']) -> name ('Elformulario');
Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos']) -> name ('LosRecuerdos');

//Rutas para el request POST del recuerdo
Route::post('/guardarRecuerdo',[diarioController::class, 'guardarRecuerdo']) -> name ('guardar');

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'welcome') -> name('apodoInicio');

Route::get('/v1', function () {
    return view('vista1');
}); */

/* Rutas agrupadas por controlador */
/* Group = es un método */
/* Route::controller(diarioController::class) -> group (function(){
    /* Lleva dos parametros 1) Ruta y 2) Método de inicio */
/*     Route::get('/', 'metodoInicio') -> name ('apodoInicio');
    Route::get('/form', 'metodoFormulario') ->  name ('apodoFormualario');
    Route::get('/recuerdos', 'metodoRecuerdos') ->  name ('apodoRecuerdos');
 */