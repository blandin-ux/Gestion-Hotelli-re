@extends('layouts/backoffice')

@section('titre')
    Articles en rupture
@endsection

@section('corps')
    <div class="container">
        <div>
            <h3 class="text-center  mt-4 mb-4">RUPTURE DE STOCKS</h3>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Articles</th>
                    <th>Quantité</th>
                    <th>Seuil minimun</th>
                    <th>Ecart</th>
                </tr>
            </thead>
            <tbody>
            @foreach($article as $a)
                @if(($a->quantite)<=($a->minimum))
                <tr>
                    <td>{{$a->name}}</td>
                    <td>{{$a->quantite}}</td>
                    <td>{{$a->minimum}}</td>
                    <td>{{($a->quantite)-($a->minimum)}}</td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        <a href="/gestion-stocks" class="btn btn-outline-danger">RETOUR A LA GESTION DES STOCKS</a>
    </div>
    
@endsection