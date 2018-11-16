<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/vendor/components/font-awesome/css/fontawesome-all.css">

    <title>Gestion des tâches</title>
</head>
<body>
@include('header')

<main role="main" class="container">
    @yield('main')
</main>

@include('footer')
<script src="/vendor/components/jquery/jquery.min.js"></script>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>