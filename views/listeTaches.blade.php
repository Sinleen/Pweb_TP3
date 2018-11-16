@extends('master')

@section('main')
        <h1>Liste des tâches</h1>

        <table class="table">
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td class="header">Expiration</td>
                <td class="header">Categorie</td>
                <td class="header">Description</td>
                <td class="header">Accomplie</td>
            </tr>
            </thead>
            <tbody>
            @foreach($taches as $tache)
                <tr>
                    <td>{{ $tache->expiration  or '' }}</td>
                    <td>{{ $tache->categorie  or '' }}</td>
                    <td>{{ $tache->description  or '' }}</td>
                    <td>{{ $tache->accomplie or '' }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <form method="post">
            <button type="submit" class="btn btn-outline-primary" name="bouton" value="maBite">Créer une tache</button>
        </form>
@endsection

