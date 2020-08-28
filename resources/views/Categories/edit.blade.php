@extends('layouts/backoffice')


@section('corps')
<form enctype="multipart/form-data" action="/save-categorie" method="post" class="card col-5 mt-4 mb-4" style="margin:10px auto;">
    @csrf
    <h4 class="text-center mt-2">Modifier la catégorie {{$categorie->name}}</h4>
    <div> 
        <input type="hidden" name="id" value="{{ $categorie->id }}">
    </div>
    <div class="form-group">
        <input type="text" name="name" value="{{ $categorie->name }}" placeholder="nom de la catégorie" class="form-control mt-4 col-md-5" required>
    </div>
    <div class="form-group">
        <textarea name="description" value="{{ $categorie->description }}" placeholder="description" cols="30" rows="5" class="form-control" required>{{ $categorie->description }}</textarea>
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
