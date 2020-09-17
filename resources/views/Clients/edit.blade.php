<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
</head>
<body>
    <div class="container">
        <form enctype="multipart/form-data" action="/clients/update" method="POST">
        @csrf
            <input type="hidden" name="id" value="{{$client->id}}">
            <div class="row">
                <div class="col-md-4">
                    <input class="form-control" value="{{$client->name}}" type="text" name="name" id="" placeholder="nom">
                </div>
                <div class="col-md-4">
                    <input class="form-control" value="{{$client->adresse}}" type="text" name="adresse" id="" placeholder="adresse">
                </div>
                <div class="col-md-4">
                    <input class="form-control" value="{{$client->telephone}}" type="number" name="telephone" id="" placeholder="numero de télephone">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <input type="text" value="{{$client->ville}}" class="form-control" name="ville" placeholder="Ville">
                </div>
                <div class="col-md-4">
                    <input type="text" value="{{$client->pays}}" name="pays" id="" placeholder="pays" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="email" value="{{$client->email}}" name="email" id="file" placeholder="E-mail" class="form-control" required>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" value="{{$client->cp}}" class="form-control mt-2" name="cp" placeholder="CP">
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-outline-danger mt-2" value="Enregistrer">
                </div>
            </div>        
        </form>
    </div>
</body>
</html>