<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$chambre->name}} </title>
</head>
<style>
img{
    max-width: 40%;
    border-radius: 10pc 10pc 10pc 10pc; 
    height:auto;
}
</style>
<body>
<img src="{{asset($chambre->image_uri)}}"  alt="" srcset="" class="mx-auto d-block mt-2 mb-2">
    <div class="container">
        <table class="table hover">
            <thead>
                <tr>
                    <th>Appartenant à l'Hôtel</th>
                    <th>Appartenat à la catégorie</th>
                    <th>NuméroT</th>
                </tr>
                <tr>
                    <td>{{$chambre->hotel_id?$chambre->hotel->name:""}}</td>
                    <td> {{$chambre->categorie_id?$chambre->categorie->description:""}} </td>
                    <td>{{$chambre->telephone}}</td>
                </tr>    
            </thead>
        </table>
        <a href="{{$chambre->id}}/edit" class="btn btn-outline-warning btn-sm">Modifier</a>
    </div>
</body>
</html>