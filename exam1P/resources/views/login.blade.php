@extends('layouts.plantillaUno')
    
@section('titulo', 'login')

@section('contenido')

<h1>Este es el LOG-IN</h1>
<!-- <form action="{{ route('apodoLogin') }}" method="GET"> -->

    <h1 class="display-3 text-center text-secondary"> Ingrese su email y contraseña </h1>

    <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Acceder al sitio</button>
  </div>
</form>

@endsection

 