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
@include('include.nav2')

<h2>Insert Student</h2>

<form action="{{ route('insertStudent') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <label for="StudentName">Student name:</label><br>
  <p style ="color: red">
  @error('StudentName')
  {{$message}}
  @enderror
  </p>
  <input type="text" id="StudentName" name="StudentName" value="{{ old('StudentName') }}"><br>
  <label for="age">age:</label><br>
  <p style ="color: red">
  @error('age')
  {{$message}}
  @enderror
  <input type="text" id="age" name="age"value="{{ old('age') }}"><br><br>
  <label for="city">City:</label><br>
  <p style="color: red">
      @error('city')
       <div class ="alret alret- danger mt-2">{{ $message }}</div> 
      @enderror
    </p>
    <select name="city" id="city" >
      <option value="">Please Select City</option>
      <option value="Cairo" {{ old('City') =='Cairo' ? 'selected' : '' }}>Cairo
      <option value="Giza"{{ old('City') == 'Giza' ? 'selected' : '' }}>Giza
      <option value="Alex"{{ old('City') == 'Alex' ? 'selected' : '' }}>Alex
    </select>
    <br><br>
    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>


    <label for="active">Active:</label><br>
    <input type="checkbox" id="active" name="active" class="form-control"><br><br>{{ old('active') ? 'checked' : '' }}
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
