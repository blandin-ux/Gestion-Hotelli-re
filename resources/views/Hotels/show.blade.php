<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{$hotel->name}} </title>
</head>
<style>
.img{
    max-width: 40%;
    border-radius: 10pc 10pc 10pc 10pc; 
}
img{
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
@media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
.nameh{
  font-size: 20px;
  letter-spacing: 1px;
  font-weight: 800;
  font-family: cursive;
}
</style>
<body>
<p class="text-center nameh"> {{$hotel->name}} </p>
<img src="{{asset($hotel->image_uri)}}"  alt="" srcset="" class="mx-auto d-block mt-2 mb-2 img">
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
    <div class="container">
        <h3 class="text-center text-muted">Toutes les chambres de l'hôtel <b>{{$hotel->name}}</b> </h3>
    </div>  
    <div class="album py-5 bg-light">
    <div class="container-fluid">
      <div class="row">
        @foreach($hotel->chambres as $chambre)
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="{{asset($chambre->image_uri)}}" class="bd-placeholder-img card-img-top img-hotel" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" class="ml-2">Numéro : +242 {{$chambre->telephone}}</text>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <span class="text-center d-flex font-weight-bolder mb-2">  </span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>
                <small class="text-muted">Ajouter le {{$chambre->created_at->format("d/m/y")}}  à : {{$chambre->created_at->format("H:m:s")}} </small>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
            
</body>
</html>
<script src="{{asset('js/jquery.js')}}"></script>
<script  src="{{asset('js/jquery.arctext.js')}}"></script>
<script>
  $(document).ready(function () {
    $('.nameh').arctext({radius:600, rotate:false});
  });
   

</script>