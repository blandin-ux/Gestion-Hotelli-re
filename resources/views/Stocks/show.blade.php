@extends('layouts/backoffice')

@section('titre')
    Afficher - stock
@endsection

@section('corps') 
<div class="card text-center" style="width:20rem; margin:10px auto;">
    <div class="card-header">
        <h4 class="card-text">{{$stock->name}}</h4>
    </div>
    <div class="card-body">
        <h6 class="card-text ">Numéro de série : <small>{{$stock->numserie}}</small></h6>
        <h6 class="card-text">Créé le : <small>{{$stock->created_at->format('d/m/Y à H:i:s')}}</small></h6>
    </div>
</div>

<div class="container mt-4">
    <table class="table">
        <thead>
            <tr>
                <th>Articles entrés en stock</th>
                <th>Quantité</th>
                <th>Prix d'achat</th>
                <th>Prix de vente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stock->entrees as $entree)
            <tr>
                <td>{{$entree->article?$entree->article->name:"x"}}</td>
                <td>{{$entree->quantite}}</td>
                <td>{{$entree->pa}} Fcfa</td>
                <td>{{$entree->pv}} Fcfa</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/gestion-stocks" class="btn btn-danger">Retour</a>
</div>

@endsection