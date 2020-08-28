@extends('layouts/backoffice')

@section('titre')
    Afficher article
@endsection

@section('corps')

<div class="card mt-4 col-md-6" style="margin:10px auto;">
    <div class="card-body">
        <h5 class="card-title">{{$article->name}}</h5>
        <p class="card-text"><small class="text-muted">Ajouter le: {{$article->created_at->format('d/m/Y')}}</small></p>
        <p class="card-text"><small class="text-muted">modifié le : {{$article->updated_at->format('d/m/Y à H:i:s')}}</small></p>
    </div>
    <img class="card-img-bottom" src="{{asset($article->image_uri)}}" alt="Card image cap" style="height:300px;">
    <a href="/gestion-articles" class="btn btn-danger">Retour</a>
</div>
@endsection