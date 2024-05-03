<!DOCTYPE html>
<html>
<body>

<h2>Insert Student</h2>

<form action="{{ route('insertStudent') }}" method="POST">
  @csrf
  <label for="StudentName">Student name:</label><br>
  <input type="text" id="StudentName" name="StudentName" ><br>
  <label for="age">age:</label><br>
  <input type="text" id="age" name="age"><br><br>

  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
