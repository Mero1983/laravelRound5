<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('include.nav')
<div class="container">
  <h2>{{__('messages.Clients Data')}}</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>{{__('messages.Clients Name')}}</th>
        <th>{{__('messages.Phone')}}</th>
        <th>{{__('messages.Email')}}</th>
        <th>{{__('messages.Websit')}}</th>
        <th>city</th>
        <th>address</th>
        <th>image</th>
        <th>Active</th>
        <th>Edit</th>
        <th>Show</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
@foreach ($clients as $client)
      <tr>
        <td>{{$client->ClientName}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->website}}</td>
        <td>{{$client->city}}</td>
        <td>{{$client->address}}</td>
        <td>{{$client->image}}</td>
        <td>{{ $client->active? 'Yes' :'No'}}</td>

        <td><a href="{{ route('editClient', $client->id) }}">Edit</a></td>
        <td><a href="{{ route('showClient', $client->id) }}">Show</a></td>
<td>
  <form action="{{route ('delClient')}}" method="POST">
  
@csrf
@method('DELETE')
            <input type="hidden" value="{{$client->id}}" name="id">
            <input type="submit" value="Delete"onclick="return confirm('Are you sure you want to delete this client?')">
          </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
