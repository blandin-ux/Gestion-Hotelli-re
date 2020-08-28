@extends('layouts/backoffice')

@section('titre')
    Liste des stocks
@endsection

@section('corps')
@csrf
    <div class="container">
        <div>
            <h2 class="text-center mt-4 mb-4">GESTION DES STOCKS</h2>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                FAIRE UNE ENTREE EN STOCK
            </button>
            <a href="/rupture-stocks" class="btn btn-outline-secondary">RUPTURE DE STOCKS</a>
            <a href="/gestion-articles" class="btn btn-outline-secondary">GESTION ARTICLES</a>
            <a href="/liste-categories" class="btn btn-outline-secondary">GESTION CATEGORIES </a>
        </div>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th></th>
                    <th>Date d'entrée</th>
                    <th>Stocks</th>
                    <th>Numéro de série</th>
                    <th class="text-center">Fonctions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stock as $s)
                <tr>
                    <td>
                        @if($s->actif)
                        <span class="badge badge-success">a</span>
                        @else
                        <span class="badge badge-danger">d</span>
                        @endif
                    </td>
                    <td>{{$s->created_at->format('d/m/Y - H:i:s')}}</td>
                    <td>Stock {{$s->id}}</td>
                    <td>{{$s->numserie}}</td>
                    <td>
                        <a href="/afficher-stock/{{$s->id}}"class="btn btn-outline-info btn-sm">ETAT GLOBAL</a>
                        @if(!$s->actif)
                        <a href="/activer-stock/{{$s->id}}"class="btn btn-success btn-sm">A</a>
                        @else
                        <a href="/desactiver-stock/{{$s->id}}"class="btn btn-danger btn-sm">D</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <div class="d-flex justify-content-center">{{$stock->links()}}</div>

    



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nouvelle entrée</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                    <div class="flex-container">
                        <div class="form-group">
                            <select name="" id="article_id" class="form-control">
                                <option value="">Choix article</option>
                                @foreach($articles as $article)
                                <option value="{{ $article->id }}">{{ $article->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input id="qt" type="number" placeholder="quantité" class="form-control">
                        </div>

                        <div class="form-group">
                            <input id="pa" type="number" placeholder="prix d'achat" class="form-control">
                        </div>

                        <div class="form-group">
                            <input id="pv" type="number" placeholder="prix de vente" class="form-control">
                        </div>
                    </div>
                        <div class="add-entree">
                            <button id="btn-add" class="btn btn-outline-success">Ajouter</button>
                        </div>
                    
                        

                <table id="entrees" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Designation</th>
                            <th>Quantité</th>
                            <th>PA</th>
                            <th>PV</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button id="btn-save" type="button" class="btn btn-primary">Enregistrer</button>
            </div>

        </div>
    </div>
</div>


<script>
    //
    $('#btn-add').click(function(e){
        e.preventDefault();
        var article_id = $('#article_id').val();
        var article_text = $('#article_id option:selected').text();
        var qt = $('#qt').val();
        var pa = $('#pa').val();
        var pv = $('#pv').val();
        var tr = '<tr data-article_id='+article_id+' data-quantite='+qt+' data-pa='+pa+' data-pv='+pv+'> <td>' + article_text + '</td> <td>' + qt + '</td> <td>' + pa + '</td> <td>' + pv + '</td> <td><span class="btn btn-danger btn-xs remove">Sup</span></td> </tr>';
        $("#entrees").find('tbody').append(tr);
        $('.remove').click(function(e){
            e.preventDefault();
            $(this).parent().parent().remove(); 
        });
    });
</script>

<script>
    $('#btn-save').click(function(e){
        var donnees = [];
        $('#entrees').find('tbody').find('tr').each(function(){
            //console.log($(this).find('td').eq(0).text());
            var elt = {};
            elt.article_id = $(this).data('article_id');
            elt.quantite = $(this).data('quantite');
            elt.pa = $(this).data('pa');
            elt.pv = $(this).data('pv');
            donnees.push(elt);
            //console.log(elt);
        })

        //console.log(donnees);

        $.ajax({
            url:'/entree-en-stock',
            type:'post',
            dataType:'json',
            data:{champs: donnees,_token:$('input[name="_token"]').val()},
            success:function(data){
                window.location.replace('/gestion-stocks')
            },
            error:function(err){
                alert('Something wrong (°_° ) Code erreur :' + err.code)
            }

        })
    });
</script>


@endsection