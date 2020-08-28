@extends('layouts/backoffice')

@section('titre')
    Toutes les categories
@endsection

@section('corps')
    <div class="container">
        <div>
            <h3 class="text-center mt-4 mb-4">TOUTES LES CATEGORIES</h3>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Etats</th>
                    <th>Catégories</th>
                    <th>Description</th>
                    <th>Fonctions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categorie as $c)
                <tr>
                    <td>
                        @if($c->actif)
                        <span class="badge badge-success">a</span>
                        @else
                        <span class="badge badge-danger">d</span>
                        @endif
                    </td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->description}}</td>
                    <td>
                        <a href="/afficher-categorie/{{$c->id}}"class="btn btn-outline-secondary btn-sm">voir</a>
                        <a href="/modifier-categorie/{{$c->id}}"class="btn btn-outline-secondary btn-sm">modifier</a>
                        @if(!$c->actif)
                        <a href="/activer-categorie/{{$c->id}}"class="btn btn-success btn-sm">A</a>
                        @else
                        <a href="/desactiver-categorie/{{$c->id}}"class="btn btn-danger btn-sm">D</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <a href="/ajouter-categorie" class="btn btn-outline-secondary">Ajouter</a>
        </div>
    </div>
        <div class="d-flex justify-content-center">{{$categorie->links()}}</div>
@endsection