<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation</title>
</head>
<body>
    <div class="container">
        <form enctype="multipart/form-data" action="/clients" method="POST">
        @csrf
            <div class="row">
                <div class="col-md-4">
                    <input class="form-control" type="text" name="name" id="" placeholder="nom">
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="text" name="adresse" id="" placeholder="adresse">
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="number" name="telephone" id="" placeholder="numero de télephone">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="ville" placeholder="Ville">
                </div>
                <div class="col-md-4">
                    <input type="text" name="pays" id="" placeholder="pays" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="email" name="email" id="file" placeholder="E-mail" class="form-control" required>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control mt-2" name="cp" placeholder="CP">
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-outline-danger mt-2" value="Enregistrer">
                </div>
            </div>        
        </form>
    </div>
</body>
</html>