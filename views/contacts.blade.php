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

    <title>Gestion de contacts</title>
</head>
<body>
<main role="main" class="container">
    <table class="table">
        <thead style="background-color: #ddd; font-weight: bold;">
        <tr>
            <td class="header">Nom</td>
            <td class="header">Prénom</td>
            <td class="header">Téléphone</td>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->nom  or '' }}</td>
                <td>{{ $contact->prenom  or '' }}</td>
                <td>{{ $contact->tel  or '' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
<script src="/vendor/components/jquery/jquery.min.js"></script>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>