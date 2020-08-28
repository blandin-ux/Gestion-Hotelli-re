@extends('layouts/backoffice')


@section('corps')
<div class="form-group">
        <form enctype="multipart/form-data" action="/store-stock" method="post" class="card col-6">
            @csrf
            <div> 
                <input type="hidden" name="id" value="id">
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="nom du stock">
            </div>
            <div class="form-group">
                <input type="text" name="numserie" placeholder="numéro de série">
            </div>
            <div class="form-group">
                <input type="number" name="annees" placeholder="année">
            </div>
            <div class="form-group">
                <input type="number" name="mois" placeholder="mois">
            </div>
            <div class="form-group">
                <input type="number" name="semaines" placeholder="semaine">
            </div>
            <div>
                <input type="submit" class="btn btn-success">
                <a href="/gestion-stocks" class="btn btn-danger">Annuler</a>
            </div>
            
        </form>
    </div>
@endsection