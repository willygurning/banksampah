<!DOCTYPE html>
<html lang="en">
<style>

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.min.css') }}">
   
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">  
    <title>Bank Sampah</title>

</head>

<body>
<header class="main-header">
<nav class="navbar navbar-expand-lg navbar-white bg-white ">
  <a class="navbar-brand" href="#"> <img src="{{asset ('assets/image/logo.jpeg') }}" width="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    
      <a class="nav-item nav-link text-dark"  href="#">Tentang</a>
      <a class="nav-item nav-link" href="#"> <img src="{{asset ('assets/image/user.png') }}" width="30px"></a>
      <a class="nav-item nav-link" href="#"><img src="{{asset ('assets/image/keranjang.png') }}" width="30px"></a>
    
    </div>
  </div>
</nav>
</header>


<div class="container">
<div class="jumbotron text-center bg-white">
  <h1>Tukar Sampah</h1>

</div>   
<div class="row">

<div class="col-md-4 text-center">
<a href="http://localhost:81/banksampah/public/tukar/nonorganik "><img src="{{asset ('assets/image/depp.jpg') }}" width="280px" margin="auto"></a>
<h3>Non Organik</h3>
</div>

<div class="col-md-4 text-center">
<a  href="http://localhost:81/banksampah/public/tukar/elektronik"><img src="{{asset ('assets/image/elektronik.jpg') }}" width="310px"></a>
<h3>Elektronik</h3>
</div>

<div class="col-md-4 text-center">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
    <a href="http://localhost:81/banksampah/public/tukar/pakaian"><img src="{{asset ('assets/image/pakaian.jpg') }}" width="300px"></a>
    <h3>Pakaian</h3>
    </div>
  
  </div>



</div>
</div>



<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
   </div>
</footer>

</div>


   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
</script>
</body>
</html>

