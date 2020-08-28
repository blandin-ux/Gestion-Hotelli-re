@extends('layouts.backoffice')
@section('titre')
Modification du client {{$client->name}}
@endsection
@section('corps')
             <div class="container">
                <h2 class="text-center pb-3">Modifier {{$client->name}} </h2>
                  <form action="/clients/save" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{$client->id}}">
                    <div class="row">
                      <div class="col-md-4"> 
                         <div class="form-group">
                          <input type="text" placeholder="Nom du client" name="name" class="form-control" value="{{$client->name}}"> 
                         </div>
                      </div>
                      <div class="col-md-3"> 
                         <div class="form-group">
                          <input type="text" placeholder="Numero de téléphone" name="phone" class="form-control"  value="{{$client->phone}}"> 
                         </div>
                      </div>
                      <div class="col-md-3"> 
                         <div class="form-group">
                          <input type="text" placeholder="E-mail du client" name="email" class="form-control"  value="{{$client->email}}"> 
                         </div>
                      </div>
                        <div class="form-group">
                         <input type="submit" class="btn btn-danger" value="Valider">
                        </div> 
                    </div>
                  </form> 
             </div>
@endsection             