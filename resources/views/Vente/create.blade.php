@extends('layouts.backoffice')
@section('titre')

@endsection
@section('corps')
<h2 class="ml-5">Selection du client</h2> 
<div class="container mt-2"> 
           <form action="/facture/add-client" method="post">
             @csrf
             <div class="row">
                 <div class="col-md-3"> 
                      <div class="form-group">
                        <select class="form-control" name="client_id" required id="">
                            <option value="">Selectionner le client</option>
                            @foreach($client as $cli)
                            <option value="{{ $cli->id }}">{{$cli->name }}</option>
                            @endforeach
                        </select> 
                        </div>
                      </div>                  
                 </div>
                 <button class="btn btn-outline-danger btn-xs" > Envoyer </button>
             </div>       
           </form>
       </div>
@endsection