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

<form action="{{ route('insertClient') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <label for="ClientName">Client name:</label><br>
  <p style ="color: red">
  @error('ClientName')
  {{$message}}
  @enderror
  <br>
  <input type="text" id="ClientName" name="ClientName"  value="{{ old('ClientName') }}"><br>
  <label for="phone">Phone:</label><br><br>
  <p style="color: red">
      @error('phone')
        {{ $message }}
      @enderror
    </p>
    <br>
  <input type="text" id="phone" name="phone" value="{{ old('phone') }}"><br><br>
  <label for="email">email:</label><br>
  <p style="color: red">
      @error('email')
        {{ $message }}
      @enderror
    </p>
  <input type="email" id="email" name="email" value="{{ old('email')}} "><br><br>
  <label for="website" >website:</label><br>
  <p style="color: red">
      @error('website')
        {{ $message }}
      @enderror
    </p>
  <input type="text" id="website" name="website"><br><br>
  </p>
  <label for="city">City:</label><br>
  <p style="color: red">
      @error('city')
        {{ $message }}
      @enderror
    </p>
    <select name="city" id="city" >
      <option value="">Please Select City</option>
      <option value="Cairo" {{ old('City') =='Cairo' ? 'selected' : '' }}>Cairo
      <option value="Giza"{{ old('City') == 'Giza' ? 'selected' : '' }}>Giza
      <option value="Alex"{{ old('City') == 'Alex' ? 'selected' : '' }}>Alex
    </select>
    <br><br>
    <label for="address" >address:</label><br>
  <p style="color: red">
      @error('address')
        {{ $message }}
      @enderror
    </p>
  <input type="text" id="address" name="address"><br><br>
  </p>
    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>


    <label for="active">Active:</label><br>
    <input type="checkbox" id="active" name="active" class="form-control"><br><br>{{ old('active') ? 'checked' : '' }}
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
