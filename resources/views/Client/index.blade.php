<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <div class="container pt-4 pb-4" id="carte"> 
     <div class="card" id="tcorps">
       <div class="card-header">
         <a href="/clients/create" id="ajouter" class="btn btn-danger btn-sm pb-2">Ajouter <i class="fa fa-user"></i></a>
       </div>
           <h1 class="page-header text-center" id="h2"> LISTE DES CLIENTS</h1>
                    <table class="table table-bordered table-striped" > 
                        <thead> 
                            <tr> 
                                <th></th>
                                <th>Nom</th>
                                <th>Télephone</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach($client as $cli)
                                <tr>
                                    <td> <?= $cli->actif? '<span class="badge badge-success">A</span>':'<span class="badge badge-danger">D</span>'?>  </td>
                                    <td>{{$cli->name}}</td>
                                    <td>{{$cli->phone}}</td>
                                    <td>{{$cli->email}}</td>                
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="/clients/{{$cli->id}}" class="btn btn-info btn-sm">Afficher</a></li>
                                            <li class="list-inline-item"><a href="/clients/edit/{{$cli->id}}" class="btn btn-warning btn-sm">Modifier</a></li>
                                        @if(!$cli->actif)
                                            <li class="list-inline-item"><a href="/clients/open/{{$cli->id}}" class="btn btn-success btn-sm">A</a></li>
                                        @else
                                            <li class="list-inline-item"><a href="/clients/close/{{$cli->id}}" class="btn btn-danger btn-sm">D</a></li>    
                                        @endif
                                        </ul>
                                        </td>               
                                 </tr>
                                @endforeach
                            </tbody>  
                    </table>
                    <div>{{$client->links()}}</div>
       </div>             
    </div>