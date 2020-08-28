@extends('layouts.backoffice')
@section('titre')
Effectuer un achat
@endsection
@section('corps')
<h2 class="ml-5">Panier client</h2> 
<div class="container mt-2"> 
           <form action="/ticket/add-article" method="get">
             @csrf
             <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
             <input type="hidden" name="user_id" value="{{$ticket->id}}">
             <input type="hidden" name="article_id" value="{{$ticket->id}}">
             <div class="row">
                 <div class="col-md-3"> 
                      <div class="form-group">
                        <select class="form-control" name="article_id" required id="">
                            <option value="">Selectionner article</option>
                            @foreach($articles as $article)
                            <option value="{{ $article->id }}">{{$article->name }}</option>
                            @endforeach
                        </select> 
                         
                        </div>
                      </div>
                  <div class="col-md-3"> 
                      <div class="form-group">
                         <input type="number" class="form-control" placeholder="Quantité" required name="quantite">
                      </div> 
                   </div>   
                   
                                           
                 </div>
                 <button class="btn btn-outline-danger btn-sm" > Envoyer </button>
                    
             </div>       
           </form>
       </div>
        <div class="container mt-2">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                          <th>Designation</th>
                          <th>Quantité</th>
                          <th>PU</th>
                          <th>Total</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($ticket->lignes as $ligne)
                      <tr>
                        <td>{{ $ligne->article->name }}</td>
                        <td>{{ $ligne->quantite }}</td>
                        <td>{{ $ligne->pu }} Frcfa</td>
                        <td>{{ $ligne->quantite * $ligne->pu }} Frcfa</td>
                        <td><a href="/ticket/katoula/{{$ligne->id}}" class="btn btn-outline-danger btn-sm">Retirer</a></td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                </table>

                <ul class="list-inline">
                  @if($ticket->lignes->count())
                  <li class="list-inline-item">
                    <a href="/ticket/valider/{{$ticket->id}}" class="btn btn-outline-success btn-sm">Confirmer</a>
                  </li>
                  @endif

                  <li class="list-inline-item">
                    <a href="/ticket/annuler/{{$ticket->id}}" class="btn btn-outline-danger btn-sm">Annuler</a>
                  </li>
                </ul>
                     
            </div>
        </div>


@endsection