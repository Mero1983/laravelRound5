<!DOCTYPE html>
<html>
  <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- start nav bar  -->
@include('include.nav')

<h2>Insert Client</h2>

<form action="{{ route('updateClient',$client->id) }}" method="POST">
  @csrf
  @method('put')
  <label for="">Client name:</label><br>
  <input type="text" id="ClientName" name="ClientName" class="form-control" value="{{$client->ClientName}}"><br>
  <label for="phone">Phone:</label><br>
  <input type="text" id="phone" name="phone" class="form-control" value="{{$client->phone}}"><br><br>
  <label for="email">email:</label><br>
  <input type="email" id="email" name="email" class="form-control" value="{{$client->email}}"><br><br>
  <label for="website">website:</label><br>
  <input type="text" id="website" name="website" class="form-control" value="{{$client->website}}"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
