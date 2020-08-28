@extends('layouts.backoffice')
@section('corps')
@section('titre')
Détail inventaire {{ $inventaire->name}}
@endsection
<div class="container">
  <table class="table">
     <thead>
       <tr>      
         <th>Designation</th>
         <th>Quantité en stock</th>
         <th>Quantité réelle</th>
       </tr>
     </thead>
     <tbody>
     @foreach($inventaire->lignes as $ligne)
        <tr>
            <td>{{$ligne->article_id?$ligne->article->name:"-"}}</td>
            <td>{{$ligne->enstock}}</td>
            <td>{{$ligne->reel}} </td>
        </tr>
      @endforeach  
     </tbody> 
   </table>

</div>   
@endsection