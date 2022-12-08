<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <title>Update Data</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
@if(session('message'))
    <div class="alert alert-success">
      {{session('message')}}
     @endif

     @if(session('error'))
    <div class="alert alert-success">
      {{session('error')}}
     @endif
<div class="container sk">
<form action="{{url('update/'.$xyz->id)}}" method="post">@csrf
<div class="form-group">
    <label>Name</label>
    <input type="text"class="form-control" id="name" name="name"value="{{$xyz->name}}"></div>
    <div class="form-group">
        <label>email</label>
        <input type="text"class="form-control" id="email"value="{{$xyz->email}}"name="email"></div>
        <div class="form-group">
        <label>password</label>
        <input type="password"class="form-control" id="password" name="password" value="{{$xyz->password}}"></div>
        <label for="course">Choose a course</label>
       <select name="course" id="course"class="form-control">
       <option value="select" selected hidden>{{$xyz->course}}</option>
  <option value="BCA">BCA</option>
  <option value="MCA">MCA</option>
  <option value="Btech">Btech</option>
  <option value="MSC">MSC</option>
  <option value="BBA">BBA</option>
  <option value="MBA">MBA</option>
  <option value="B.com">B.com</option>
  <option value="BSC">BSC</option>
 </select><br>
 <label for="city">Choose a city</label>
       <select name="city" id="city"class="form-control"value="{{$xyz->city}}">
       <option value="select">select</option>
  <option value="Auraiya">Auraiya</option>
  <option value="Kanpur">Kanpur</option>
  <option value="Aligarh">Aligarh</option>
  <option value="Jaipur">Jaipur</option>
  <option value="Noida">Noida</option>
  <option value="Banglore">Banglore</option>
  <option value="Delhi">Delhi</option>
  <option value="Agra">Agra</option>
 </select><br>
 <label for="date">Date of Birth</label>
 <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"value="{{$xyz->date_of_birth}}"><br>
    <label>Number</label>
    <input type="tel"class="form-control" id="number" name="number"value="{{$xyz->number}}">
<button type="submit"class="btn btn-danger mt-2" value="update" name="update">Update</button>
    </form>
</div>
<style>
    .sk{
     border: 1px solid red;
     width:40%;
         }
    </style>
</body>
</head>
</html>