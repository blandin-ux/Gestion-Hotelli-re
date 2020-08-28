@extends('layouts.backoffice')
@section('titre')
Nouvel inventaire
@endsection
@section('corps')
@csrf
<h2 class="page-header text-center">Nouvel inventaire</h2>     
<div class="container pt-4 pb-4">
        <div class="card">
            
            <div class="card-body">
                <table id="table-articles" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Quantité en stock</th>
                            <th>Quantité réelle</th>
                             
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach($articles as $li)
                        <tr data-article_id= {{ $li->id }} data-quantite= {{ $li->quantite }} >
                            <td data-id={{ $li->id }} >{{  $li->name }}</td>
                             
                            <td> {{$li->quantite}} </td>
                            <td contenteditable="true"></td>
                            
                        </tr> 
                        @endforeach
                    </tbody> 
                </table>
                <div>  
              </div> 
            </div>
            <div class="card-footer">
                <div style="max-width:200px" class="text-center">
                    <button id="btn-save" class="btn btn-block btn-primary">Enregister</button>
                </div>
            </div>
        </div>
</div> 
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $('#btn-save').click(function(e){
        //alert('Ok ok ok');
        var donnees = [];
        $('#table-articles').find('tbody').find('tr').each(function(){
            //console.log($(this).find('td').eq(0).text());
            var elt = {};
            elt.article_id = $(this).data('article_id');
            elt.quantite = $(this).data('quantite');
            elt.reel = $(this).find('td:last').text();
            donnees.push(elt);
            console.log(elt); 
        })

        console.log(donnees);

        $.ajax({
            url:'/inventaires',
            type:'post',
            dataType:'json',
            data:{champs: donnees,_token:$('input[name="_token"]').val()},
            success:function(data){
                window.location.replace('/inventaires')
            },
            error:function(err){
                alert('Quelque chose s\'est mal passé !!! Code erreur :' + err.code)
            }

        })
    });
</script>

@endsection