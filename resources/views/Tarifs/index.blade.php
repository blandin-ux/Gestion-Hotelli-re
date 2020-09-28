<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Liste des clients</title>
</head>
<body>
    <div class="container">
        <h6 class="text-center">Liste de tous les tarifs repartis selon les catégories et classes des hôtels</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Categorie</th>
                    <th>Classe</th>
                    <th>TarifUnitaire</th>
                    <th>Fonction</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tarifs as $tarif)
                <tr>
                    <td> {{$tarif->categorie_id?$tarif->categorie->description:"kedal"}} </td>
                    <td> <b>{{$tarif->classe_id?$tarif->classe->etoile:"kedal"}}</b> </td>
                    <td> {{$tarif->tarifUnitaire}} Frcfa </td>
                    <td> <a href="tarifs/{{$tarif->id}}/edit" class="btn btn-outline-warning btn-sm">edit</a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/tarifs/create" class="btn btn-success">Nouveau Tarif</a>
    </div>
</body>
</html>