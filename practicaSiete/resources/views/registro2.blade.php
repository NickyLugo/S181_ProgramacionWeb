@extends('layouts.plantilla')

<style>
        body {
            background-image: url('/images/bg02.jpeg'); /* Ruta a tu imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
</style>

@section('contenido')
        <p class="Saludo text-font: 34px">Hola mundo</p>
    @include('partials.modal')

@endsection