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
        <form enctype="multipart/form-data" action="/categories" method="POST">
        @csrf
            <div class="row">
                <div class="col-md-4">
                    <input class="form-control" type="text" name="description" id="" placeholder="nom de la categorie">
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-outline-danger mt-2" value="Enregistrer">
                </div>
            </div>        
        </form>
    </div>
</body>
</html>