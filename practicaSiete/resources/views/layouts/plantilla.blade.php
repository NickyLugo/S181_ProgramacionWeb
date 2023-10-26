
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <div>
        <img class="background" src="{{ URL('images/bg01.jpg') }}" alt="">
    </div>
    
    @vite(['resources/js/app.js'])
</head>
<body>
    @component('partials.navbar')
    @endcomponent

</body>
</html>

<!-- Sobre los hallazgos, Caroline Sharp, directora de investigación de la Fundación Nacional para la Investigación Educativa, 
dijo: "Los hallazgos sugieren que el uso moderado de computadoras, tabletas y teléfonos inteligentes es apropiado 
para los niños de cinco años, siempre que no interfiera con su aprendizaje". 
Otras actividades valiosas entre padres e hijos, como conversar y leerles cuentos antes de dormir.
"El uso moderado de alrededor de una a tres veces al mes se asoció con los niveles más altos de alfabetización emergente". -->