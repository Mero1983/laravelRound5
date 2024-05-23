<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show {{ $student->StudentName }}</title>
</head>
<body>
 <p><img src="{{asset('assets/images/',$student->image)}}" alt=""></p>
    <h1><strong>Student: </strong>{{ $student->StudentName }}</h1>
    <hr>
    <h2><strong>Age: </strong>{{ $student->age}}</h2>
    <hr>
   
</body>
</html> 