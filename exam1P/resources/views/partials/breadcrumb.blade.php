<!-- <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Log-in</li>
    <li class="breadcrumb-item active" aria-current="page">Busqueda de productos</li>
  </ol>
</nav> -->

<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('apodoInicio') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('apodoLogin') }}">Log-in</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('apodoLogin') }}">Log-in</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="/producto">Búsqueda de productos</a></li>
  </ol>
</nav>

<!-- <li class="nav-item">
   <a class="nav-link active" aria-current="page" href="{{ route('apodoInicio') }}">Home</a>
</li>
        
<li class="nav-item">
    <a class="nav-link" href="/ejerc">Ejercicio</a>
</li> -->
