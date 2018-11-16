@extends('master')

@section('main')
    <h1>Création d'une tâche</h1>


    <form method="post" >
        <div class="form">
            <div class="form-group">
                <label for="expiration">Date Expiration</label>
                <input type="date" name="expiration" value="{{$tache->expiration}}" class="form-control"
                       id="expiration" placeholder="Date d'expiration format AAAA-MM-JJ">
            </div>
        </div>
        <div class="form">
            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <input type="text" name="categorie" value="{{$tache->categorie}}" class="form-control"
                       id="categorie" placeholder="Categorie">
            </div>
        </div>
        <div class="form">
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" value="{{$tache->description}}" class="form-control"
                       id="description" placeholder="Description de la tâche">
            </div>
        </div>
        <div class="form">
            <div class="form-group">
                <label for="accomplie">Accomplie</label>
                <input type="text" name="accomplie" value="{{$tache->accomplie}}" class="form-control"
                       id="accomplie">
            </div>
        </div>
        <button type="submit" class="btn  btn-outline-success" name="ajouter" value="valide">Ajouter</button>
        <button type="submit" class="btn  btn-outline-danger" name="retour" value="null">Retour</button>
    </form>
@endsection