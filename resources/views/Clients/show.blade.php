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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>CP</th>
                    <th>Pays</th>
                    <th>Télephone</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{$client->name}} </td>
                    <td> {{$client->adresse}} </td>
                    <td> {{$client->ville}} </td>
                    <td> {{$client->cp}} </td>
                    <td> {{$client->pays}} </td>
                    <td> {{$client->telephone}} </td>
                    <td> {{$client->email}} </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>