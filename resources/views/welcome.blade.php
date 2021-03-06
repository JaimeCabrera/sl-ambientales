<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="language" content="ES">
    <meta name="copyright" content="solucionesambientalesec">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta title="Soluciones Ambientales EC">
    <meta name="keywords" content="Equipos de laboratorio, insumos quimicos, producto de la laboratorio ecuador" />
    <meta name="description"
        content="Ofrecemos venta de equipos de laboratorío en Guayaquil - Edcuador e insumos químicos">
    <meta name="robots" content="index, follow" />
    <title>Soluciones | Ambientales</title>
    {{-- // "bootstrap": "^4.6.0", "popper.js": "^1.16.1", --}}
    <!-- css  -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    <main id="app">
        <App></App>
    </main>
</body>
<script src="{{asset('js/app.js')}}"></script>

</html>