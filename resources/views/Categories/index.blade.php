<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les catégories</title>
</head>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<body>
    <div class="container">
        <a href="categories/create" class="btn btn-outline-danger mt-2 mb-2">Ajouter</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom de la catégorie</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $categorie)
                <tr>
                    <td> {{$categorie->description}} </td>
                    <td> <a href="categories/{{$categorie->id}}/edit" class="btn btn-outline-warning btn-sm">edit</a> </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</body>
</html>