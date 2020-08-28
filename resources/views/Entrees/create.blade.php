@extends('layouts/backoffice')


@section('corps')
<h3> 
    Entrée en Stock
</h3>
<div class="container mt-4">
    <form class="row" action="/nouvelle-entree" method="post">
    @csrf
        <input type="hidden" name="id" value="id">

        <input type="hidden" name="stock_id" value="{{ $stock->stock_id=$stock->id }}">

        <div class="form-group col-3">
            <select name="article_id" id="" class="form-control" required>
                <option value="">Article</option>
                @foreach($article as $a)
                <option value="{{ $a->article_id=$a->id }}">{{$a->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group col-3">
            <input type="number" name="quantite" placeholder="quantité des articles" class="form-control">
        </div>

        <div class="form-group col-2">
            <input type="number" name="pa" placeholder="prix d'achat" class="form-control">
        </div>

        <div class="form-group col-2">
            <input type="number" name="pv" placeholder="prix de vente" class="form-control">
        </div>

        <div>
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>


<div class="container-fluid card mt-4 col-8">
    <table class="table">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Quantité</th>
                    <th>PA</th>
                    <th>PV</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stock->entrees as $e)
                <tr>
                    <td>{{$e->article?$e->article->name:"x"}}</td>
                    <td>{{$e->quantite}}</td>
                    <td>{{$e->pa}}</td>
                    <td>{{$e->pv}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <div>
        <a href="/confirmer-entree-stock/{{ $stock->id }}" class="btn btn-success btn-sm">Confirmer</a>
        <a href="/annuler-entree-stock/{{ $stock->id }}" class="btn btn-danger btn-sm">Annuler</a>
    </div>
</div>

@endsection