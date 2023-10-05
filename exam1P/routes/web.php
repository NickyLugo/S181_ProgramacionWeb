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

Route::view('/', 'welcome') -> name ('apodoInicio');
Route::view('/log-in', 'login') -> name ('apodoLogin');
Route::get('/producto', function () {
    return view('producto');
});

