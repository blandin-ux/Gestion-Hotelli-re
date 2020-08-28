@extends('layouts/backoffice')

@section('titre')
    Modifier - article
@endsection

@section('corps')

<style>
#formulaire{
    margin: 10px auto;
}
</style>
    <div  class="">
        <form id="formulaire" enctype="multipart/form-data" action="/save-article" method="post" class="card col-5">
            @csrf
            <h4 class="text-center mt-2">Modification de {{$article->name}}</h4>
            <div> 
                <input type="hidden" name="id" value="{{ $article->id }}">
            </div>

            <div class="form-group mt-2">
                <label>Nom</label>
                <input type="text" name="name" value="{{ $article->name }}" class="form-control">
            </div>

            <div class="form-group">
                <select name="categorie_id" id="" value="" class="form-control" required>
                    <option value="">Categorie</option>
                    @foreach($categorie as $cat)
                    <option value="{{ $cat->categorie_id=$cat->id }}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="hidden" name="quantite" value="{{ $article->quantite }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Prix d'achat</label>
                <input type="text" name="pa" value="{{ $article->pa }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Prix de vente</label>
                <input type="text" name="pv" value="{{ $article->pv }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Seuil minimum</label>
                <input type="text" name="minimum" value="{{ $article->minimum }}" class="form-control"required>
            </div>

            <div class="form-group">
                <input type="file" name="image_uri" id="file" required>
            </div>

            <div class="mb-2">
                <input type="submit" class="btn btn-success">
                <a href="/gestion-articles" class="btn btn-danger">Annuler</a>
            </div>
            
        </form>
    </div>
@endsection