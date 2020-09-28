<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Reservation n° {{$reservation->id}} </title>
</head>
<style>
img{
    max-width: 40%;
    border-radius: 10pc 10pc 10pc 10pc; 
    height:auto;
}
</style>
<body>
<input type="hidden" name="chambre_id" value="{{$reservation->chambre_id}}">
    <img src="{{asset($reservation->chambre_id?$reservation->chambre->image_uri:"")}}"  alt="" srcset="" class="mx-auto d-block mt-2 mb-2">
    <div class="container">
        <table class="table hover">
            <thead>
                <tr>
                    <th> Nom(s) du client </th>
                    <th> Télephone </th>
                    <th> Date d'entrée </th>
                    <th> Date de sortie </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{$reservation->name}} </td>
                    <td> +242{{$reservation->telephone}} </td>
                    <td> {{$reservation->entree}} </td>
                    <td> {{$reservation->sortie}} </td>
                </tr>
            </tbody>
        </table>
        <div class="">
            <form action="/reservations/{{$reservation->id}}/edit" method="get" class="ml-1">
                <div class="container">
                    <input type="hidden" name="id" value="{{$reservation->id}}">
                    <input type="hidden" name="chambre_id" value="{{$reservation->chambre_id}}">
                    <input type="text" required name="montant" class="form-control col-md-3" placeholder="Montant">
                    <a href="/reservations/{{$reservation->id}}" class="btn btn-danger btn-sm mt-2">Annuler</a>
                    <input type="submit" class="btn btn-success btn-sm mt-2" value="Confirmer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>