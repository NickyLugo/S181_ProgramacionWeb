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

Route::get('/',[diarioController::class, 'metodoInicio']) -> name ('ElInicio');
Route::get('/form',[diarioController::class, 'metodoFormulario']) -> name ('Elformulario');
Route::get('/recuerdos', [diarioController::class, 'metodoRecuerdos']) -> name ('LosRecuerdos');

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::view('/', 'welcome') -> name('apodoInicio');

Route::get('/v1', function () {
    return view('vista1');
}); */
