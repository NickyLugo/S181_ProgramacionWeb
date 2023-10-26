<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos;

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
    public function guardarRecuerdo( validadorFormRecuerdos $req ){
        /* return 'Se esta procesando tu recuerdo...'; */

        // $validated = $req->validate([
        //     /* Si esta vacío no lo deja pasar */
        //     'txtTitulo' => 'required||unique:posts|max:25',
        //     'txtRecuerdo' => 'required||unique:posts|min:4',
        // ]);

        /* Ctrl+K+C para comentar cada línea */
         return redirect ('/form') -> with ('confirmacion', 'Tu recuerdo llegó al controlador');
/*          return $req ->all(); */

    /* echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req->path();
        echo " - ";
        echo $req->method();
        echo " - ";
        echo $req->input('txtTitulo');
        echo "</p>"; */
    }
}
