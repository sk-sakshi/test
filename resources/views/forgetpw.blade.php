<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{asset('public\assets\css\style.css')}}"> -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <title>Login</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        button[type="button"] {
    width: 30%;
    padding: var(--primary-padding);
    border-radius: var(--pilled-shape-radius);
    border: none;
    background: var(--primary-gradient);
    color: var(--white-shade);
    margin: 10px 0 10px 0;
}
    </style>
<body>

@if(session('message'))
    <div class="alert alert-success">
      {{session('message')}}
     @endif

     @if(session('error'))
    <div class="alert alert-danger">
      {{session('error')}}
     @endif
    <div class="container">
        <div class="item-container">

            <h2 class="log-in">Log in</h2>
        </div>


        <form action="{{url('forgetpw')}}" method="POST" enctype="multipart/form-data">
                    @csrf
            <div class="form-input">
                <label for="email" class="label" >Email</label>
                <input type="text" name="email" >
            </div>
            <div class="form-input">
                <label for="password" class="label" >Password</label>
                <div style="display:flex;align-items:center;">
                <input type="password" id="password-field" name="password"  >
                <i class="fa fa-eye field-icon toggle-password" aria-hidden="true" style="margin-left:-30px"toggle="#password-field"></i>
 
                <!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>           </div> -->
            </div>
            <div class="display-space-between">
                <div>
                    <input type="checkbox" checked>
                    <label for="password" class="chekbox-label">Remember Me</label>
                </div>
                <div>
                    <a data-toggle="modal" data-target="#myModal" href="#">Forget password</a>
                    
                </div>
            </div>
            <div>
                <button type="submit">Log in</button>
                <div>
                <a  href="{{url('signup')}}">Signup</button>
                </div>

                
            </div>
            
        </form>
        <div class="display-space-between">
            <a href="#">privacy policy</a>
            <a href="#">Terms & condition</a>
        </div>
    </div>
 <!-- Modal -->
 
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="width: 130%;">
        <div class="modal-header">
        <h4 class="modal-title">Reset Password</h4>
        </div>
        @if(session('msg'))
    <div class="alert alert-primary">
      {{session('msg')}}
     @endif

     @if(session('wrong'))
    <div class="alert alert-danger">
      {{session('wrong')}}
     @endif
        <form action="{{url('reset')}}" method="post" >
          @csrf
        <div class="modal-body">
          <label>Enter Email</label>
          <input type="text" name="email" id="number" class="form-control" placeholder="email">
                <span style="color:green;margin-left: 20px;">
        <div class="modal-footer">
          <button type="submit" class="btn btn-default">submit</button>
          <button type="button" class="btn btn-default mx-2" data-dismiss="modal">Close</button>
        </div>
</form>
      </div>
    </div>
  </div> 
</div>

</body>
</html>

<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

<script>

  // SHOW PW
 $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>





