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

        </select>
  <label for="">Client name:</label><br>
  <input type="text" id="ClientName" name="ClientName" class="form-control" value="{{$client->ClientName}}"><br>
  <label for="phone">Phone:</label><br>
  <input type="text" id="phone" name="phone" class="form-control" value="{{$client->phone}}"><br><br>
  <label for="email">email:</label><br>
  <input type="email" id="email" name="email" class="form-control" value="{{$client->email}}"><br><br>
  <label for="website">website:</label><br>
  <input type="text" id="website" name="website" class="form-control" value="{{$client->website}}"><br><br>

  <label for="city">City:</label><br>
    <p style="color: red">
      @error('city')
        {{ $message }}
      @enderror
      @foreach($cities as $city)
                <option value="{{ $city->id }}"
                    {{ old('city', $client->city_id) == $client->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
    </p>
    <select name="city" id="city" class="form-control">
      
      <option value="">Please Select City</option>
      <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza" {{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex" {{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
      <!-- @foreach ($options as $city => $value)
        <option value="{{ $city }}" {{ old('city') === $key ? 'selected' : '' }}>
            {{ $value }}
        </option>
    @endforeach -->
    </select>
    <br><br>
    <label for="active">Active:</label><br>
    <input type="checkbox" id="active" name="active" class="form-control" {{ old('active') ? 'checked' : '' }}><br><br>

    <p><img src="{{ asset('assets/images/' . $client->image)  }}" alt=""></p>
    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control" ><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
