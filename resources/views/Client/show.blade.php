@extends('layouts.backoffice')
@section('titre')
{{$client->name}}
@endsection
@section('corps')
    </head>
    <body>
      <div style="" class="container pt-4">
        <div class="card">
            <div class="card-header">
                <ul class="list-inline pull-right">
                    <li class="list-inline-item"><a href="/clients" class="btn btn-sm btn-primary">Tous les clients</a></li>
                    <li class="list-inline-item"><a href="/clients/create" class="btn btn-sm btn-danger">Ajouter</a></li>
                </ul>
                
            </div>
            <div class="card-body">
                <h2 class="page-header ml-3">{{ $client->name }}</h2>     
                <ul class="list-group">
                    <li class="list-group-item">NOM DU CLIENT: {{ $client->name }}</li> 
                    <li class="list-group-item">TELEPHONE: {{ $client->phone }}</li>
                    <li class="list-group-item">ADRESSE: {{ $client->email }}</li>  
                </ul>
            </div>
        </div>
    </div>
@endsection    