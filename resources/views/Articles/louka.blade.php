@extends('layouts/backoffice')

@section('titre')
    Listes des articles
@endsection

@section('corps')
    <form action="/louka" method="get" class="d-flex m-0 p-0 col-md-3">
        <input type="text" name="louka" placeholder="Rechercher article ici..." id="" class="form-control" required>
        <button class="btn btn-info ml-1"><i class="fa fa-search"></i></button>
    </form>
    <div class="container mt-4">
        <div>
            <h2 class="text-center pb-3">Résultats pour l'article {{$louka}}</h2>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Articles</th>
                    <th>Catégories</th>
                    <th>Quantité</th>
                    <th>PA</th>
                    <th>PV</th>
                    <th>Seuil minimun</th>
                    <th>Ecart</th>
                    <th>Etat</th>
                    <th>Fonctions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($article as $a)
                <tr>
                    <td>
                    @if($a->actif)
                    <span class="badge badge-success">a</span>
                    @else
                    <span class="badge badge-danger">d</span>
                    @endif
                    </td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->categorie?$a->categorie->name:"x"}}</td>
                    <td>{{$a->quantite}}</td>
                    <td>{{$a->pa}} Fcfa</td>
                    <td>{{$a->pv}} Fcfa</td>
                    <td>{{$a->minimum}}</td>
                    <td>{{($a->quantite)-($a->minimum)}}</td>
                    <th>
                        @if(($a->quantite)<=($a->minimum))
                        <span style="color:red;">En rupture</span>
                        @else
                        <span>En stock</span>
                        @endif
                    </th>
                    <td>
                        <a href="/afficher-article/{{$a->id}}"class="btn btn-outline-secondary btn-sm">voir</a>
                        <a href="/modifier-article/{{$a->id}}"class="btn btn-outline-secondary btn-sm">modifier</a>
                        @if(!$a->actif)
                        <a href="/activer-article/{{$a->id}}"class="btn btn-success btn-sm">A</a>
                        @else
                        <a href="/desactiver-article/{{$a->id}}"class="btn btn-danger btn-sm">D</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <a href="/ajouter-article" class="btn btn-outline-secondary">Ajouter</a>
        </div>
        @if(request()->input())
            <h6 class="mt-2"> {{ $article->total() }} résultat(s) pour la recherche de {{$louka}} </h6>
        @endif
    </div>
    <div class="d-flex justify-content-center">{{$article->links()}}</div>
@endsection