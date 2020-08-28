@extends('layouts/backoffice')


@section('corps')


<div class="card mt-4" style="width:40rem; margin:10px auto;">
    <div class="card-body">
        <h4 class="card-title">{{$categorie->name}}</h4>
        <p class="card-text">{{$categorie->description}}</p>
        <p class="card-text"><small class="text-muted">Ajoutée le : {{$categorie->created_at->format('d/m/Y à H:i:s')}}</small></p>
    </div>
    <img class="card-img-bottom" src="{{asset($categorie->image_uri)}}" alt="Card image cap" style="width-max:100%; height:300px;">
    <a href="/liste-categories" class="btn btn-danger">Retour</a>
</div>
@endsection