<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$hotel->name}} </title>
</head>
<style>
img{
    max-width: 40%;
    border-radius: 10pc 10pc 10pc 10pc; 
}
</style>
<body>
<img src="{{asset($hotel->image_uri)}}"  alt="" srcset="" class="mx-auto d-block mt-2 mb-2">
    <div class="container">
        <table class="table hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>CPH</th>
                    <th>Contact</th>
                    <th>Hotel de classe</th>
                </tr>
                <tr>
                    <td>{{$hotel->name}}</td>
                    <td>{{$hotel->adresse}}</td>
                    <td>{{$hotel->cph}}</td>
                    <td>{{$hotel->telephone}}</td>
                    <td>{{$hotel->classe_id?$hotel->classe->etoile:"atakima"}}</td>
                </tr>    
            </thead>
        </table>
        <a href="{{$hotel->id}}/edit" class="btn btn-outline-warning btn-sm">Modifier</a>
    </div>
</body>
</html>