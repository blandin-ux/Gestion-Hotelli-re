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
    @if(date('d M Y')>=$reservation->sortie)
    <div class="container"> 
        <span>Les jours de Mr(Mme) <b><i>{{$reservation->name}}</i></b> sont épuisés ! </span> 
        <a href="" class="btn btn-danger  float-right">Génération de la Facture</a>
        @else
        <span>Cette chambre est encore occupée par Mr(Mme) <b><i>{{$reservation->name}} !</i></b> </span>
    </div>     
    @endif        
    </div>
</body>
</html> 