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
        <div class="item-container">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                aria-hidden="true" role="img" width="24" height="24" 
                preserveAspectRatio="xMidYMid meet" 
                viewBox="0 0 24 24"><path fill="#1e293b" d="M21.456 10.154c.123.659.19 1.348.19 2.067c0 5.624-3.764 9.623-9.449 9.623A9.841 9.841 0 0 1 2.353 12a9.841 9.841 0 0 1 9.844-9.844c2.658 0 4.879.978 6.583 2.566l-2.775 2.775V7.49c-1.033-.984-2.344-1.489-3.808-1.489c-3.248 0-5.888 2.744-5.888 5.993c0 3.248 2.64 5.998 5.888 5.998c2.947 0 4.953-1.685 5.365-3.999h-5.365v-3.839h9.26Z"/></svg>
            </button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" 
                viewBox="0 0 24 24"><path fill="#1e293b" d="M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 0 0 2.048-2.578a9.3 9.3 0 0 1-2.958 1.13a4.66 4.66 0 0 0-7.938 4.25a13.229 13.229 0 0 1-9.602-4.868c-.4.69-.63 1.49-.63 2.342A4.66 4.66 0 0 0 3.96 9.824a4.647 4.647 0 0 1-2.11-.583v.06a4.66 4.66 0 0 0 3.737 4.568a4.692 4.692 0 0 1-2.104.08a4.661 4.661 0 0 0 4.352 3.234a9.348 9.348 0 0 1-5.786 1.995a9.5 9.5 0 0 1-1.112-.065a13.175 13.175 0 0 0 7.14 2.093c8.57 0 13.255-7.098 13.255-13.254c0-.2-.005-.402-.014-.602a9.47 9.47 0 0 0 2.323-2.41l.002-.003Z"/></svg>
            </button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" 
                viewBox="0 0 486.037 1000"><path fill="#1e293b" d="M124.074 1000V530.771H0V361.826h124.074V217.525C124.074 104.132 197.365 0 366.243 0C434.619 0 485.18 6.555 485.18 6.555l-3.984 157.766s-51.564-.502-107.833-.502c-60.9 0-70.657 28.065-70.657 74.646v123.361h183.331l-7.977 168.945H302.706V1000H124.074"/></svg>
            </button>
        </div>
       
        <div class="item-container">
            <p>or login using email</p>
        </div>
        <form action="{{url('loginform')}}" method="POST" enctype="multipart/form-data">
                    @csrf
            <div class="form-input">
                <label for="email" class="label" >Email</label>
                <input type="text" name="email" >
            </div>
            <div class="form-input">
                <label for="password" class="label" >Password</label>
                <input type="password" name="password" >
            </div>
            <div class="display-space-between">
                <div>
                    <input type="checkbox" checked>
                    <label for="password" class="chekbox-label">Remember Me</label>
                </div>
                <div>
                    <a href="#">Forget password</a>
                </div>
            </div>
            <div>
                <button type="submit">Log in</button>
                <button type="button"style="margin-left:30px;"  data-toggle="modal" data-target="#myModal" >Send Otp</button>
            </div>
        </form>
        <div class="display-space-between">
            <a href="#">privacy policy</a>
            <a href="#">Terms & condition</a>
        </div>
    </div>

<!-- <div class="container"> -->
  <!-- <h2>Small Modal</h2> -->
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="width: 130%;">
        <div class="modal-header">
          <!-- <button type="btn" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title">Send Otp</h4>
        </div>
        <div class="modal-body">
          <label>Enter Mobile Number</label>
          <input type="text" name="mobile" id="number" class="form-control" placeholder="Enter Mobile Number">
            <div class="mt-2" id="recaptcha-container"></div>
                <button type="button" onclick="phoneAuth();"  class="btn btn-primary my-2 float-right" id="getotp">Get Otp</button>
                <span style="color:green;margin-left: 20px;"
                id="sms"></span>
                <div id="verify"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
</div>

</body>
</html>

<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script>

// Your web app's Firebase configuration

var firebaseConfig = { 

    apiKey: "AIzaSyBf0fNdEIHVJ09ZR96Hf9rI5SsyCMKFazM",
    authDomain: "fir-fb2b6.firebaseapp.com",
    projectId: "fir-fb2b6",
    storageBucket: "fir-fb2b6.appspot.com",
    messagingSenderId: "284738301759",
    appId: "1:284738301759:web:85f4afac87231e42aeed8a",
    measurementId: "G-BQNNHZQDX0"

};

// Initialize Firebase

firebase.initializeApp(firebaseConfig);
</script>
<script>
window.onload = function() {
render();
};
function render() {

window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
recaptchaVerifier.render();

}
function phoneAuth() {
//get the number

var num = '+91';
var number = document.getElementById('number').value;
var number = num + number;
//phone number authentication function of firebase

//it takes two parameter first one is number,,,second one is recaptcha

firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {

//s is in lowercase

window.confirmationResult = confirmationResult;

coderesult = confirmationResult;

console.log(coderesult);

var text = "OTP Send Successfully";

var text1 =

'<input type="text"  onkeydown="return (event.keyCode!=13);" class="form-control" id="verificationCode" placeholder="Enter verification code"><button type="button" class="btn btn-success mt-2"  onclick="codeverify();">Verify code</button><span style="color:red;margin-left: 50px;" id="error"></span>';

document.getElementById('verify').innerHTML = text1;

document.getElementById("sms").innerHTML = text;

}).catch(function(error) {

alert(error.message);
});

}

function codeverify() {

var code = document.getElementById('verificationCode').value;

coderesult.confirm(code).then(function(result) {

// $('.signup').click();

// $("#myModal").modal('hide');

// alert('success'); 

customer_login();




var user = result.user;

// console.log(user);



}).catch(function(error) {

// alert(error.message);     

var text = "Try Again !!  Invalid OTP";

document.getElementById("error").innerHTML = text;

});

}

function customer_login(){
    // $('.modal-content').css('width','90%');
    window.location.href = "http://localhost:8000/regform";


}

</script>



