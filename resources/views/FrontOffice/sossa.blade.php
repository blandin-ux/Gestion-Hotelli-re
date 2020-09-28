@extends('layouts.frontoffice')
@section('titre')
Résultats de la recherche
@endsection
@section('sossa')
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @foreach($hotels as $hotel)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <marquee direction="down" scrollamount="10" behavior="slide">
            <img src="{{asset($hotel->image_uri)}}" class="bd-placeholder-img card-img-top img-hotel" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" class="ml-2">{{$hotel->name}}</text>
          </marquee>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <span class="text-center d-flex font-weight-bolder mb-2"> {{$hotel->classe_id?$hotel->classe->etoile:"rien"}} </span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="hotels/{{$hotel->id}}" class="btn btn-sm btn-outline-secondary">Voir+</a>
                  <a href="/hotels/{{$hotel->id}}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
                <small class="text-muted">Ajouter le {{$hotel->created_at->format("d/m/y")}}  à : {{$hotel->created_at->format("H:m:s")}} </small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
@endsection
