<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendario</title>
</head>
<body>
<h1 class="display-3 text-center text-primary"> Éste es el calendario </h1>
</body>
</html>
 -->
@extends('layouts.plantillaUno')
    
@section('titulo', 'ejercicio')

@section('contenido')

    <h1 class="display-3 text-center text-primary"> Éste es el calendario </h1>
    <button class="btn btn-success" type="submit">Buscar un día</button>

@endsection

<!-- 
$theme-colors: (
  "primary":    $primary,
  "secondary":  $secondary,
  "success":    $success,
  "info":       $info,
  "warning":    $warning,
  "danger":     $danger,
  "light":      $light,
  "dark":       $dark
); -->