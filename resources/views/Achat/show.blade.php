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
         <th>Quantité Acheté</th>
         <th>Prix unitaire</th>
       </tr>
     </thead>
     <tbody>
     @foreach($ticket->lignes as $ligne)
        <tr>
            <td>{{$ligne->article_id?$ligne->article->name:"aucun"}}</td>
            <td>{{$ligne->quantite}}</td>
            <td>{{$ligne->pu}} Frcfa</td>               
        </tr>
      @endforeach
     </tbody> 
   </table>
<h6 class="text-right"><i>Produit(s) acheté(s) le : {{$ticket->updated_at->format('d-m-y à H:h:s')}}</i></h6>
</div>   
@endsection