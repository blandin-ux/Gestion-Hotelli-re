@extends('layouts.frontoffice')
@section('titre')
Réservation de la chambre {{$chambre->id}}
@endsection
@section('textcli')
Confirmez votre réservation en remlpissant le formulaire avec beaucoups d'attention. Merci !
@endsection
@section('barreRecherche')
<form action="/reserver" method="post" class="filter__form">
@csrf
                        <input type="hidden" name="chambre_id" value="{{$chambre->id}}">
                        <div class="filter__form__item filter__form__item--search">
                            <p>Nom (complet) </p>
                            <div class="filter__form__input">
                                <input name="name" type="text" placeholder="Saisir ici..." required>
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Entrée_#</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input name="entree" type="text" class="datepicker_pop check__in">
                                <i class="arrow_carrot-down"></i>
                            </div>
                        </div>
                        <div class="filter__form__item">
                            <p>Sortie_#</p>
                            <div class="filter__form__datepicker">
                                <span class="icon_calendar"></span>
                                <input name="sortie" type="text" class="datepicker_pop check__out"> 
                            </div>
                        </div>
                        <div class="filter__form__item filter__form__item--select">
                            <p> Teléphone </p>
                            <div class="filter__form__datepicker">
                                <div class="filter__form__select">
                                <span class="fa fa-phone"></span>
                                    <input type="number" name="telephone" class="" placeholder="N° télephone" required>
                                </div>    
                            </div>
                        </div>
                        <button type="submit">Valider</button>
                    </form>
@endsection