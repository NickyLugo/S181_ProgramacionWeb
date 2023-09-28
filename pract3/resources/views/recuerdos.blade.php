@extends('layouts.plantilla')

<!-- Primer parametro es el nombre del yield, segundo parametro el nombre -->
@section('titulo', 'Recuerdos')

@section('contenido')

    <h1 class="display-1 text-center text-danger"> MEMORIAS </h1>
    <!-- Snippet de blade -->
    @include('partials.pagination')

@endsection('contenido')
