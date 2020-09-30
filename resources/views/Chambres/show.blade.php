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
<input type="hidden" name="categorie_id" value="{{$chambre->categorie_id}}">
<input type="hidden" name="tarifier_id" value="tarifier_id">
<input type="hidden" name="hotel_id" value="hotel_id">
    <div class="container">
        <table class="table hover">
            <thead>
                <tr>
                    <th>Appartenant à l'Hôtel</th>
                    <th>Appartenat à la catégorie</th>
                    <th>NuméroT</th>
                    <th>Prix</th>
                </tr>
                <tr>
                    <td>{{$chambre->hotel_id?$chambre->hotel->name:""}}</td>
                    <td> {{$chambre->categorie_id?$chambre->categorie->description:""}} </td>
                    <td>{{$chambre->telephone}}</td>
                    <td> {{$chambre->tarifier_id?$chambre->tarifier->tarifUnitaire:"Aucun prix"}} Fcfa/Jour(s) </td>
                </tr>    
            </thead>
        </table>
        <marquee behavior="" direction=""> <p class="text-left"> <i>L'hôtel se trouve au quartier <b>{{$chambre->hotel_id?$chambre->hotel->adresse:""}}</b> </i> et a pour N° de téléphone : <b>+242{{$chambre->hotel_id?$chambre->hotel->telephone:""}}</b> Merci ! </p></marquee>
    </div>
</body>
</html>