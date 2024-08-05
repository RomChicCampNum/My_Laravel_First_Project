<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<!-- Navbar -->
@include('header')

<!-- Contenu principal -->
<div class="container mt-4">
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-auto">
    <div class="text-center p-3">
        © 2024 Ma Boutique:
        <a class="text-dark" href="#">MaBoutiqueLaravel.com</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+6q2YbZoP0IKbfo0pRYA6cIIFkP0J"
        crossorigin="anonymous"></script>
</body>
</html>
