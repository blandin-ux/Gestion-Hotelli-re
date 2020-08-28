@extends('layouts.backoffice')
@section('titre')
Toutes les ventes
@endsection
@section('corps')
@csrf
<h2 class="page-header text-center">Historique des ventes</h2>     
<div class="container pt-4 pb-4">
        <div class="card">
            <div class="div-achat">
                <a href="/achats/create" class="btn btn-sm btn-outline-secondary ml-2 mt-2">Faire une vente</a>
            </div>
                <!-- Button trigger modal -->    
        <button class="btn btn-outline-primary btn-sm mt-3 ml-2 col-md-2" data-toggle="modal" data-target="#panier">
            Vendre
        </button>
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>#</th>
                            
                            <th></th>  
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach($tickets as $li)
                        <tr> 
                            <td> {{$li->created_at->format('d/m/Y à H:i:s')}} </td>
                            <td> {{$li->name}} </td>
                            <td> <a href="/achats/{{$li->id}}/show" class="btn btn-outline-secondary btn-sm">Voir+</a> </td>
                        </tr> 
                        @endforeach
                    </tbody> 
                </table>
                <div>  
              </div> 
            </div>
        </div>
        </div> 
        <strong class="d-flex justify-content-center">{{$tickets->links()}}</strong>


<!-- Modal -->
<div class="modal fade" id="panier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Panier</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="flex-container">
            <div class="form-group">
                <label for="">Article</label>
                <select name="" id="article_id" class="form-control">
                    <option value="">Choix article</option>
                    @foreach($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Quantité</label>
                <input id="qt" type="number" class="form-control">
            </div>
            <div class="div-btn"><button id="btn-add" class="btn btn-warning">Ajouter</button></div>
            
        </div>

        <table id="tpanier" class="table table-bordered">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>Quantité</th>
                    <th>PU</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
      </div>
      <output id="totaux"></output>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <button id="btn-save" type="button" class="btn btn-success">Enregistrer</button>
      </div>
    </div>
  </div>
</div>

<style>
    .flex-container{
        display:flex;
        flex-direction:row;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .flex-container .btn{
        max-height:35px;
    }

    .div-btn{
        display:flex;
        flex-direction:column;
    }

    .div-btn .btn{
        margin-top:15px;
    }
</style>

<script>
    //
    $('.div-achat').hide();
    //

    $('#btn-add').click(function(e){
        e.preventDefault();
        var qt = $('#qt').val();
        var article_id = $('#article_id').val();
        var article_text = $('#article_id option:selected').text();
        var pu = 3;
        var total = qt * pu;
        var tr = '<tr data-quantite='+ qt +'  data-article_id='+ article_id +'><td>' + article_text + '</td><td>' + qt + '</td><td>' + pu + '</td> <td class="tot">' + total + '</td><td><span class="btn btn-danger btn-xs remove">x</span></td></tr>';
        $("#tpanier").find('tbody').append(tr);
        $('#qt').val(0);
        var article_id = $('#article_id').val('');
        $('.remove').click(function(e){
            e.preventDefault();
            $(this).parent().parent().remove(); 
        });
       
    });

    $('#btn-save').click(function(e){
        e.preventDefault();
        var trs = [];
        $("#tpanier").find('tbody tr').each(function(){
            var elt = {};
            elt.article_id = $(this).data('article_id');
            elt.quantite = $(this).data('quantite');
            trs.push(elt);
        });

        console.log(trs);

        $.ajax({
            url:'/achats',
            type:'post',
            dataType:'json',
            data:{champs: trs,_token:$('input[name="_token"]').val()},
            success:function(data){
                window.location.replace('/achats')
            },
            error:function(err){
                alert('Quelque chose s\'est mal passé !!! Code erreur :' + err.code)
            }

        })

    });

</script>


@endsection