@extends('layouts.backoffice')
@section('titre')
Historique des inventaires
@endsection
@section('corps')

<h2 class="page-header text-center">Historique des inventaires</h2>     
<div class="container pt-4 pb-4">
        <div class="card">
            <div class="">
                <a href="/inventaires/create" class="btn btn-sm btn-outline-secondary ml-2 mt-2">Nouvel inventaire</a>
            </div>
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>DATE</th>
                            <th>Operateur</th>
                            <th>Statut</th>
                            <th></th>  
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach($inventaires as $li)
                        <tr>
                            <td>{{  $li->name }}</td>
                            <td> {{$li->created_at->format('d/m/Y à H:i:s')}} </td> 
                            <td> {{$li->user?$li->user->name:'-'}} </td>
                            <td></td>
                            
                            <td> <a href="/inventaires/{{$li->id}}" class="btn btn-outline-secondary btn-sm">Afficher</a> </td>
                        </tr> 
                        @endforeach
                    </tbody> 
                </table>
                <div>  
              </div> 
            </div>
        </div>
        </div> 
        <strong class="d-flex justify-content-center">{{$inventaires->links()}}</strong>
@endsection