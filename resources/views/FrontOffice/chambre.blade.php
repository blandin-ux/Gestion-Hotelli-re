@extends('layouts.frontoffice')
@section('titre')
Toutes les chambres
@endsection
@section('textcli')
Choisis ta chambre puis fais fais ta reservetion !
@endsection
@section('hero')
Toutes les chambres présentes dans la plate-forme
@endsection
@section('barreRecherche')
                    <!-- Recherches ton Hôtel-->
                    <form action="frontOffice/sossa" method="get" class="filter__form">
                        <div class="filter__form__item filter__form__item--search">
                            <p>Chambre</p>
                            <div class="filter__form__input">
                                <input name="sossa" type="text" placeholder="Taper le nom de la catégorie de la chambre que vous voulez !" required>
                                <span class="icon_search"></span>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Entrée_#</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__in">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Sortie_#</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input type="text" class="datepicker_pop check__out">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item filter__form__item--select">
                            <p>Est tu un ?</p>
                            <div class="filter__form__select">
                                <span class="icon_group"></span>
                                <select>
                                    <option value=""> Adulte</option>
                                    <option value=""> Ado</option>
                                    <option value=""> Enfant</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit">Rechercher</button>
                    </form>
                    <!-- Fin recherches ton Hôtel-->
@endsection
@section('sossa')
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @foreach($chambres as $chambre)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <marquee behavior="slide" scrollamount="40" direction=""><img src="{{asset($chambre->image_uri)}}" class="bd-placeholder-img card-img-top img-hotel" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" class="ml-2">{{$chambre->name}}</text></marquee>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <span class="text-center d-flex font-weight-bolder mb-2">  </span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/chambres/{{$chambre->id}}" class="btn btn-sm btn-outline-info">Voir+</a>
                  <a href="/chambres/{{$chambre->id}}/reserver" class="btn btn-sm btn-outline-success mr-2 ml-2">Réserver</a>
                </div>
                <small class="text-muted">Ajouter le {{$chambre->created_at->format("d/m/y")}}  à : {{$chambre->created_at->format("H:m:s")}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="d-flex mx-auto">{{ $chambres->links() }}</div>
@endsection