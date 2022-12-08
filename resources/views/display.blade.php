<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <title> data</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <body>
    @if(session('message'))
    <div class="alert alert-success">
      {{session('message')}}
     @endif
    
        <table class="table table-striped table-hover table-bordered">
            
                <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Name</th>  
                    <th>Email</th>  
                    <th>Password</th>  
                     <th>Course</th>  
                    <th>City</th>  
                   <th>Date_of_birth</th>
                  <th>Number</th> 
                  <th>Delete</th> 
                  <th>Update</th>
                </tr>
                @foreach($abc as $bcd)
                <tr>
              <td>{{$bcd->id}}</td>
              <td>{{$bcd->name}}</td>
              <td>{{$bcd->email}}</td>
              <td>{{$bcd->password}}</td>
              <td>{{$bcd->course}}</td>
              <td>{{$bcd->city}}</td>
              <td>{{$bcd->date_of_birth}}</td>
              <td>{{$bcd->number}}</td>
<td> <button class="btn btn-danger"onclick='return checkdelete()'><a href="{{url('/delete/'.$bcd->id)}}"class="text-white"style="text-decoration:none;">Delete</a></button> </td>
<td> <button class="btn btn-success"><a href="{{url('/edit/'.$bcd->id)}}"class="text-white"style="text-decoration:none;">Update</a></button> </td>
</tr>              
 @endforeach   

</table>
<script>
function checkdelete()
{
  return confirm('Are You Sure You Want To Delete This Record ');
}
 </script>
</div>
</body>
</head>
</html>