<!DOCTYPE html>
<html lang="en">

<head>
    <title>register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <style>
        .nav-link {
            color: darkmagenta;
            font-size: large;
            font-weight: bold;
        }
        
        .dropdown-item {
            color: darkmagenta;
        }
        
        .navbar-toggler {
            color: darkmagenta;
        }
        
        @keyframes move-short {
            0% {
                width: 0%;
            }
            100% {
                width: 80%;
                opacity: 1;
            }
        }
        
        @keyframes move {
            0% {
                width: 80%;
            }
            100% {
                width: 0%;
                opacity: 1;
            }
        }
        
        .form-control {
            border: none;
            border-bottom: 1px solid darkmagenta;
        }
        
        .input-group-text {
            background-color: #ffffff;
            border: none;
            border-bottom: 1px solid darkmagenta;
        }
        
        .btn {
            color: white;
            background-color: darkmagenta;
            border-radius: 15px;
        }
    </style>

    <body>
       
            <div class="container-fluid py-3">
            <div class="text-center">
                <h3> SAY HELLO!</h3>
                <p>We will be happy to hear you.</p>
                <form action="{{url('/register')}}" method="post">
                    @csrf
                    <div class="text-center">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="mb-5">
                                     <div class="input-group"> 
                                         <div class="input-group-prepend"> 
                                            <div class="input-group-text"><span class="fa fa-user contact-icon" style="color:darkmagenta;"></span></div>
                                        </div>
                                        <input type="text" class="form-control" name="name" id="inlineFormInputGroupUsername" placeholder="Name">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><span class="fa fa-phone contact-icon" style="color:darkmagenta;"></span></div>
                                        </div>
                                        <input type="text" class="form-control" name="phone" id="inlineFormInputGroupUsername" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><span class="fa fa-envelope contact-icon" style="color:darkmagenta;"></span></div>
                                        </div>
                                        <input type="text" class="form-control" name="email" id="inlineFormInputGroupUsername" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><span class="fa fa-map-marker contact-icon" style="color:darkmagenta;"></span></div>
                                        </div>
                                        <input type="text" class="form-control" name="password" id="inlineFormInputGroupUsername" placeholder="password">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><span class="fa fa-thumb-tack contact-icon" style="color:darkmagenta;"></span></div>
                                        </div>
                                        <input type="text" class="form-control" name="pincode" id="inlineFormInputGroupUsername" placeholder="Pincode">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><span class="fa fa-pencil-square-o contact-icon" style="color:darkmagenta;"></span></div>
                                        </div>
                                        <textarea class="form-control" name="about" placeholder="About" id="about" name="about"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn">Submit</button>
                                <button type="Reset" class="btn mx-4">Reset</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
           
    </body>

</html>