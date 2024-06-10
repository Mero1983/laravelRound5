<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show {{ $client->ClientName }}</title>
</head>
<body>
<p><img src="{{asset('assets/images/'.$client->image)}}" alt=""></p>

    <h1><strong>Client: </strong>{{ $client->ClientName }}</h1>
    <hr>
    <h2><strong>Phone: </strong>{{ $client->phone }}</h2>
    <hr>
    <h2><strong>Email: </strong>{{ $client->email }}</h2>
    <hr>
    <h2><strong>Website: </strong>{{ $client->website }}</h2>
    <hr>
    <h2><strong>City: </strong>{{ $client->city->city }}</h2>

</body>
</html>