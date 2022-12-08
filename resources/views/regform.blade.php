<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <title> Registration</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
        <style>
        .str {
            width: 40%;
            padding: 10PX;
           
           }
        
        .hi {
            width: 40%;
            margin: auto;
            border: 1px solid skyblue;
            margin-top: 15px;

        }
        .error{
            color:red;
        }
        
    </style>
</head>

<body>
     @if(session('message'))
    <div class="alert alert-success">
      {{session('message')}}
     @endif

     @if(session('error'))
    <div class="alert alert-success">
      {{session('error')}}
     @endif
</div>
  <div>
            <div class="bg-info text-white text-center py-2  hi ">

                <h2>Registration Form</h2>
            </div>
             
                 <div class="container str" style="border:1px solid skyblue;">
            <form action="{{url('mailform')}}" method="post" enctype="multipart/form-data">
                    @csrf
                 <div class="form-group">
                        <label for="first name">First Name</label>
                        <input type="text"class="form-control"id="firstname" placeholder="Enter First Name" name="first_name">
                       <!--  <span class="error">*</span>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fil out this field. -->
                     </div>

                    <div class="form-group">
                        <label for="last name">Last Name</label>
                        <input type="text" class="form-control"id="lastname" placeholder="Enter Last Name" name="last_name">

                    </div>
                   <!--  <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <input type="radio" class="radio-inline" name="gender" id="male" value="m" style="margin:5px">Male
                        <input type="radio" class="radio-inline" name="gender" id="female" value="f" style="margin:5px">Female
                        <input type="radio" class="radio-inline" name="gender" id="others" value="o" style="margin:5px">Others
                    </div> -->
                    <div class="form-group">
                        <label for="email">Email</label>
                


                 <input type="email" class="form-control"id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password"placeholder="Enter password" name="password">
                       
                    </div>
                    <!-- <div class="form-group">
                        <label for="password"> Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password"required="true">
                        <span class="error">*</span>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fil out this field.
                    </div> -->
                    <div class="form-group">
                        <label for="number">Phone Number</label>
                        <input type="tel" class="form-control"id="number"placeholder="Enter phone number" name="number">

                    </div>
                         <!-- <div class="form-group">
                        <label for="number">Image</label>
                        <input type="file" class="form-control"id="image"placeholder="image" name="image">

                    </div><br> -->
                       <button class="btn btn-primary" name="submit">submit</button>
             </div>
        </div>
        </div>
        </div>
        </form>


</body> 

</html>