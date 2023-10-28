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
<style>
    .bg-transparent {
    opacity: 0.5;
}
</style>

    <div class="tituloPagina bg-transparent container mt-4 col-md-5">
        <h1 class="display-1 bg-primary text-center text-light"> Registro de libros </h1>
    </div>

<div class='container mt-5 bt-5 col-md-6'> <!-- div container INICIO -->

    @if (session() -> has ('confirmacion'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Registro guardado!',           
                text: '{{ session('confirmacion')}}',
            })
        </script>
    @endif

    <!-- para los errores -->
    @if ($errors->any())
        @foreach($errors->all() as $error)
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '¡Algo salió mal!',
                footer: '<a href="">Why do I have this issue?</a>'
            })
        </script>
        @endforeach
    @endif

        <!-- Head of card -->
    <div class="card"> <!-- div card INICIO -->
        <div class="card-header fs-4 text-primary text-center">
            Introduce los datos del libro
        </div>

        <!-- Body of card -->
        <div class="card-body">
<!--             <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> -->

            <form method="POST" action="/guardarRegistro">
                @csrf

                <!-- 1er elemento formulario -->
                <div class="mb-3">
                    <label class="form-label">ISBN: </label>
                    <input type="text" name="txtIsbm" class="form-control" value="{{ old('txtIsbm')}}">
                    <!-- Aquí agregamos 23Oct2023 la función mantiene el último recuerdo de ese input -->
                    <p class="text-danger fw-bold">{{ $errors->first('txtIsbm') }}</p>
                    
                </div>

                <!-- 2do elemento formulario -->
                <div class="mb-3">
                    <label class="form-label">Título: </label>
                    <input type="text"  name="txtTitulo" class="form-control" value="{{ old('txtTitulo')}}">
                    <p class="text-danger fw-bold">{{ $errors->first('txtTitulo')}}</p>
                    
                </div>

                <!-- 3er elemento formulario -->
                    <div class="mb-3">
                    <label class="form-label">Autor: </label>
                    <input type="text" name="txtAutor" class="form-control" value="{{ old('txtAutor')}}">
                    <!-- Aquí agregamos 23Oct2023 la función mantiene el último recuerdo de ese input -->
                    <p class="text-danger fw-bold">{{ $errors->first('txtAutor') }}</p>
                    
                </div>

                <!-- 4to elemento formulario -->
                <div class="mb-3">
                    <label class="form-label">Paginas: </label>
                    <input type="text"  name="txtPaginas" class="form-control" value="{{ old('txtPaginas')}}">
                    <p class="text-danger fw-bold">{{ $errors->first('txtPaginas')}}</p>
                    
                </div>

                <!-- 5to elemento formulario -->
                    <div class="mb-3">
                    <label class="form-label">Editorial: </label>
                    <input type="text" name="txtEditorial" class="form-control" value="{{ old('txtEditorial')}}">
                    <!-- Aquí agregamos 23Oct2023 la función mantiene el último recuerdo de ese input -->
                    <p class="text-danger fw-bold">{{ $errors->first('txtEditorial') }}</p>
                    
                </div>

                <!-- 6to elemento formulario -->
                <div class="mb-3">
                    <label class="form-label">Email editorial: </label>
                    <input type="text"  name="txtEmail" class="form-control" value="{{ old('txtEmail')}}">
                    <p class="text-danger fw-bold">{{ $errors->first('txtEmail')}}</p>
                    
                </div>
                
                </div>
                    <!-- Footer of card -->
                <div class="card-footer text-muted">
                  
                <!-- Hace 2 días -->
<!--                 <div class='container mt-4 col-md-2'>
                    <div class='d-grid gap-2'>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button> 
                    </div>
                </div>
                <div class='container mt-4 col-md-2'>
                    <div class='d-grid gap-2'>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button> 
                    </div>
                </div> -->
                
               <div class="container mt-4">
                    <div class="row">
<!--                         <div class="col-md-6">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </div> -->

                        <div class="boton mb-3 col-md-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div> <!-- div card FIN -->
</div> <!-- div container FIN -->
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
@endsection