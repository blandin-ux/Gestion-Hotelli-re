@extends('layouts/backoffice')

@section('titre')
    Ajouter - article
@endsection

@section('corps')
    <div class="card mt-4 col-md-5" style="margin:10px auto;">
        <form enctype="multipart/form-data" action="/store-article" method="post">
            @csrf
            <h4 class="text-center mt-2">Ajout d'un article</h4>
            <div> 
                <input type="hidden" name="id" value="id">
            </div>
            <div class="form-group mt-4">
                <input type="text" name="name" placeholder="name" class="form-control col-md-8" required>
            </div>
            <div class="form-group">
                <input type="number" name="quantite" placeholder="quantité" class="form-control col-md-3" required>
            </div>
            <div class="form-group">
                <input type="number" name="pa" placeholder="prix d'achat" class="form-control col-md-5" required>
            </div>
            <div class="form-group">
                <input type="number" name="pv" placeholder="prix de vente" class="form-control col-md-5" required>
            </div>
            <div class="form-group">
                <input type="number" name="minimum" placeholder="seuil minimum" class="form-control col-md-6" required>
            </div>

            <div class="form-group">
                <select name="categorie_id" id="" class="form-control col-md-5" required>
                    <option value="">Catégorie</option>
                    @foreach($categorie as $cat)
                    <option value="{{$cat->categorie_id=$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="file" name="image_uri" id="file" required>
            </div>
            <div class="form-group mb-2 ">
                <input type="submit" class="btn btn-success">
                <a href="/gestion-articles" class="btn btn-danger">Annuler</a>
            </div>
            

        </form>
    </div>
@endsection