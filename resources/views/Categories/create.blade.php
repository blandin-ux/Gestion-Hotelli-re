@extends('layouts/backoffice')

@section('titre')
    Ajouter - categorie
@endsection

@section('corps')
        <form enctype="multipart/form-data" action="/store-categorie" method="post" class="card col-5" style="margin:10px auto;">
            @csrf
            <h4 class="text-center mt-2">Nouvelle Catégorie</h4>
            <div> 
                <input type="hidden" name="id" value="id">
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="nom de la catégorie" class="form-control mt-2">
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="description" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="image_uri" id="file" required>
            </div>
            <div class="mb-2">
                <input type="submit" class="btn btn-success">
                <a href="/liste-categories" class="btn btn-danger">Annuler</a>
            </div>
            

        </form>
@endsection