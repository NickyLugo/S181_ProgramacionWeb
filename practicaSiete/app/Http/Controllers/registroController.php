<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\validadorFormRegistro;
use RealRashid\SweetAlert\Facades\Alert;

class registroController extends Controller
{
    //
        // aquí ponemos las funciones
        public function metodoPrincipal(){
            $now = now();
            return view('principal', ['now' => $now]);
        }
        public function metodoRegistro(){
            $now = now();
            return view('registro', ['now' => $now]);
        }
        public function guardarRegistro( validadorFormRegistro $req ){
             return redirect ('/register') -> with ('confirmacion', 'Tu registro llegó al controlador');
        }
}
