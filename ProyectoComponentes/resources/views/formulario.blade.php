@extends('layouts.plantilla2')

@section('titulo', 'formulario')

@section('contenido')
<h1 class="display-1 text-center text-primary"> Formulario </h1>

<div class='container mt-5 col-md-6'> <!-- div container INICIO -->
        <!-- Head of card -->
    <div class="card"> <!-- div card INICIO -->
        <div class="card-header fs-4 text-success text-decoration-underline text-center">
            Introduce aquí tus memorias ...
        </div>

        <!-- Body of card -->
        <div class="card-body">
<!--             <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> -->

            <form method="POST" action="/guardarRecuerdo">
                <div class="mb-3">
                    <label class="form-label">Título: </label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Recuerdo: </label>
                    <input type="text" class="form-control">
                </div>
                
                </div>
                    <!-- Footer of card -->
                <div class="card-footer text-muted">
                  
                <!-- Hace 2 días -->

                <div class='d-grid gap-2'>
                    <button type="submit" class="btn btn-outline-success">Guardar</button> 
                </div>
            </form>
        </div>
    </div> <!-- div card FIN -->
</div> <!-- div container FIN -->


@endsection