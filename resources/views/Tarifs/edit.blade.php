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
        <form enctype="multipart/form-data" action="/tarifs/update" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">    
                <select class="form-control" name="categorie_id" id="" required>
                    <option value="">Categorie</option>
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->id}}"> {{$categorie->description}} </option>
                    @endforeach
                </select>
            </div> 
            <div class="col-md-4">    
                <select class="form-control" name="classe_id" id="" required>
                    <option value="">classe</option>
                    @foreach($classes as $classe)
                    <option value="{{$classe->id}}"> {{$classe->etoile}} </option>
                    @endforeach
                </select>
            </div>    
            <div class="col-md-4">
                
                <input type="hidden" name="id" value="{{$tarifs->id}}">
                <input value="{{$tarifs->tarifUnitaire}}" type="text" class="form-control" name="tarifUnitaire" placeholder="Tarif Unitaire" required>
                
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-1">
                <input type="submit" class="btn btn-outline-danger" value="Valider">
            </div>
        </div>
        </form>
    </div>
</body>
</html>