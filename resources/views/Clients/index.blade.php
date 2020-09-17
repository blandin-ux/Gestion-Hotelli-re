<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Liste des clients</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Liste de tous les clients</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>CP</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td> {{$client->name}} </td>
                    <td> {{$client->cp}} </td>
                    <td> <a href="clients/{{$client->id}}" class="btn btn-outline-primary btn-sm">Info</a> </td>
                    <td> <a href="clients/{{$client->id}}/edit" class="btn btn-outline-warning btn-sm">edit</a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>