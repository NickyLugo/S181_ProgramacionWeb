<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    // aquí ponemos las funciones
    public function metodoInicio(){
        return view('welcome');
    }
    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoRecuerdos(){
        return view('recuerdos');
    }
    public function guardarRecuerdo( Request $req ){
        /* return 'Se esta procesando tu recuerdo...'; */
/*         return $req ->all(); */

        echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req->path();
        echo " - ";
        echo $req->method();
        echo " - ";
        echo $req->input('txtTitulo');
        echo "</p>";
    }
}
