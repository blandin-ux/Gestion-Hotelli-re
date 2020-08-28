@extends('layouts.backoffice')
@section('titre')
Toutes les ventes
@endsection
@section('corps')
@csrf
<h2 class="page-header text-center">Historique des ventes</h2>     
<div class="container pt-4 pb-4">
        <div class="card">
            <div class="">
                <a href="/vente/create" class="btn btn-sm btn-outline-secondary mt-2 ml-3 vente">Faire une vente client</a>
                <button class="btn btn-outline-primary btn-sm mt-3 ml-2 col-md-2" data-toggle="modal" data-target="#panier">
                    Vendre
                </button>
                <button class="btn btn-info test">test</button>
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
              <label for="">Client</label>  
              <select class="form-control" id="client_id" name="" required>
                <option value="">Selectionner le client</option>
                @foreach($client as $cli)
                <option id="cli" value="{{ $cli->id }}">{{$cli->name }}</option>
                @endforeach
              </select>             
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
            <div class="div-btn"><button id="btn-add" class="btn btn-secondary">Ajouter</button></div>
            
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
        <button id="btn-save" type="button" class="btn btn-outline-success">Enregistrer</button>
      </div>
    </div>
  </div>
</div>


            </div>
            <div class="card-body">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Date de la vente</th>
                            <th>#</th>
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach($factures as $li)
                        <tr>
                            <td> {{$li->created_at->format('d/m/Y à H:i:s')}} </td> 
                            <td> {{$li->name}} </td>
                            <td> <a href="/facture/{{$li->id}}/show" class="btn btn-outline-secondary btn-sm">Voir+</a> </td>
                        </tr> 
                        @endforeach
                    </tbody> 
                </table>
                <div>
                </div> 
            </div>
        </div>
        </div> 
        {{$factures->links()}}
        
<!-- Mon srcipte -->
<script>
  $('.test').click(function (e) { 
    e.preventDefault();
  $('h2').text('Salut !');    
  });
    $('.vente').hide();
    $('#btn-add').click(function(e){
        e.preventDefault();
        var client_id = $('#client_id').val();
        var client_text = $('#client_id option:selected').text();
        var qt = $('#qt').val();
        var article_id = $('#article_id').val();
        var article_text = $('#article_id option:selected').text();
        var pu = 10;  
        var total = pu * qt;
        var tr = '<tr data-pu='+ pu +' data-client_id='+ client_id +' data-quantite='+ qt +' data-article_id='+ article_id +'><td>' + article_text + '</td> <td>' + qt + '</td> <td>' + pu + '</td> <td>' + total + '</td> <td><span class="btn btn-danger btn-sm katoula">x</span></td> </tr>';
        $('#tpanier').find('tbody').append(tr);
        $('#qt').val(0);
        article_id = $('#article_id').val("");
        $('.katoula').click(function(e){
            e.preventDefault();
            $(this).parent().parent().remove(); 
        });
    });
    $('#btn-save').click(function(e){
      e.preventDefault();
      var tab = [];
      $('#tpanier').find('tbody tr').each(function(){
        var elt = {};
        elt.client_id = $(this).data('client_id');
        elt.article_id = $(this).data('article_id');
        elt.quantite = $(this).data('quantite');
        elt.pu = $(this).data('pu');
        tab.push(elt);
      });
      console.log(tab);
      $.ajax({
        type: "post",
        url: "/ventes",
        data: {champs : tab,_token:$('input[name="_token"]').val()},
        dataType: "json",
        success:function(data){
            window.location.replace('/facture/index')         
        },
        error:function(err){
          alert('Attention erreur !!! '+err.code)
        }
      })
    });
</script>

@endsection