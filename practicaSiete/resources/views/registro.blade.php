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

    <div class='container mt-5 col-md-6'> <!-- div container INICIO -->
        <h1 class="display-3 text-center text-warning"> <!-- No title yet --> </h1>
        @include('partials.card')
    </div>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
@endsection