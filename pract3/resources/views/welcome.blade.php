
@extends('layouts.plantilla')

<!-- Primer parametro es el nombre del yield, segundo parametro el nombre -->
@section('titulo', 'Inicio')

@section('contenido')

    <h1 class="display-1 text-center text-danger"> HOME </h1>

    @component('partials.offcanvas')
    @endcomponent

    <x-mensaje mensaje="Éste es el mensaje" fecha="11/10/2023"></x-mensaje>

@endsection('contenido')
