<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

<style>
h4{
    color: forestgreen;
    margin-top: 260px;
    font-family: auto;
}
h1{
    color:dimgrey;
    font-family: cursive;
}
</style>
    <div class="container mt-5">
       <marquee behavior="slide" direction="up"> <h4 class="text-center">Mr (Mme) {{$reservation->name}}  votre réservation a été éffectuer avec succès !</h4> </marquee>
        <h1 class="text-center">Maitenant veuillez vous rapprocher à l'hôtel concerné afin de payer</h1>
        <a href="/" class="btn btn-outline-secondary btn-lg">Sortie</a>
    </div>
</body>
</html>