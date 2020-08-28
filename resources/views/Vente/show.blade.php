@extends('layouts.backoffice')
@section('corps')
@section('titre')
Information sur la vente
@endsection
<div class="container">
   <table class="table">
     <thead>
       <tr>      
         <th>Produit acheté </th>
         <th>Duantité du prrodduit</th>
         <th>Prix unitaire</th>
         <th>Commander par</th>
       </tr>
     </thead>
     <tbody>
     @foreach($facture->lignes as $ligne)
        <tr>
            <td>{{$ligne->article_id?$ligne->article->name:"aucun"}}</td>
            <td>{{$ligne->quantite}}</td>
            <td>{{$ligne->pu}} Frcfa</td>
            <td></td>
        </tr>
    @endforeach        
     </tbody> 
     <h6 class="text-center"><i>Produit acheté le : {{$facture->updated_at->format('d-m-y à H:i:s')}}</i></h6>
  </table>
</div>
@endsection