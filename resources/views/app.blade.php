<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta type="description" content="Bolivartoday.cl | Transferencias desde Chile a Venezuela. La mejor plataforma digital para realizar transferencias desde Chile a Venezuela de forma rápida y segura.">
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <meta property="og:url" content="https://bolivartoday.cl" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Transfiere desde Chile a Venezuela rápido y seguro." />
    <meta property="og:description" content="La mejor plataforma digital para realizar transferencias" />
    <meta property="og:image" content="https://bolivartoday.cl/images/bolivartoday.jpg" />

    <title>Bolivartoday.cl | Transferencias de Chile a Venezuela</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
