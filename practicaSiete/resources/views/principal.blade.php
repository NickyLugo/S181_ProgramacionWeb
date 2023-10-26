@extends('layouts.plantilla')

<style>
        body {
            background-image: url('/images/bg01.jpeg'); /* Ruta a tu imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
</style>

@section('contenido')
    <h1 class="display-1 text-center text-success mt-4"> Principal </h1>

    <div>
        <img class="background" src="{{ URL('images/bg01.jpg') }}" alt="">
    </div>


@endsection