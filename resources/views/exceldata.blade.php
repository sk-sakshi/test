<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{asset('public\assets\css\style.css')}}"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>All Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body>
    <style>
       
h1 {
  position: relative;
  text-align: center;
  color: #353535;
  font-size: 50px;
  font-family: "Cormorant Garamond", serif;
}

p {
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  text-align: center;
  font-size: 18px;
  color: #676767;
}
.frame {
  width: 90%;
  margin: 40px auto;
  text-align: center;
}
button {
  margin: 20px;
}
.custom-btn {
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}
        .btn-3 {
  background: rgb(0,172,238);
background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
  width: 130px;
  height: 40px;
  line-height: 42px;
  padding: 0;
  border: none;
  
}
.btn-3 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-3:before,
.btn-3:after {
  position: absolute;
  content: "";
  right: 0;
  top: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3:before {
  height: 0%;
  width: 2px;
}
.btn-3:after {
  width: 0%;
  height: 2px;
}
.btn-3:hover{
   background: transparent;
  box-shadow: none;
}
.btn-3:hover:before {
  height: 100%;
}
.btn-3:hover:after {
  width: 100%;
}
.btn-3 span:hover{
   color: rgba(2,126,251,1);
}
.btn-3 span:before,
.btn-3 span:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
   background: rgba(2,126,251,1);
  transition: all 0.3s ease;
}
.btn-3 span:before {
  width: 2px;
  height: 0%;
}
.btn-3 span:after {
  width: 0%;
  height: 2px;
}
.btn-3 span:hover:before {
  height: 100%;
}
.btn-3 span:hover:after {
  width: 100%;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
    background: rgb(0,172,238);
  color: white;
  text-decoration:none;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color:rgba(2,126,251,1);
  color: black;
}


    </style>
<div class="container">
<button class="custom-btn btn-3"><span>Show Data</span></button>
</div>  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Sathi Id</th>
        <th>Circle</th>
        <th>Merchant Number</th>
        <th>Pin Code</th>
        <th>Address</th>
        <th>Date</th>
        <th>Status</th>
        <th>Remarks</th>
        <th>Created_at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>121</td>
        <td>11</td>
        <td>1199</td>
        <td>301201</td>
        <td>Noida</td>
        <td>01-11-2022</td>
        <td>pending</td>
        <td>good</td>
        <td>4:00</td>
      </tr>
      
    </tbody>
  </table>
  
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>  

</body>
</html>