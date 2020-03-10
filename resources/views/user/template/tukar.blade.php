<!DOCTYPE html>
<html lang="en">
<style>

  hr#hr{
    border-top:2px solid grey;
  }
  #komputer{
    padding-top:30px;
  }
  #mouse, #mouseform{
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
  }
  #mouseform{
    display: none;
  }   
  
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
<img src="{{asset ('assets/image/depp.jpg') }}" width="280px" margin="auto">
<h3>Non Organik</h3>
</div>

<div class="col-md-4 text-center">
<img src="{{asset ('assets/image/elektronik.jpg') }}" width="310px">
<h3>Elektronik</h3>

</div>

<div class="col-md-4 text-center">
<img src="{{asset ('assets/image/pakaian.jpg') }}" width="300px">
<h3>Pakaian</h3>
</div>
</div>

<h5 id="komputer">KOMPUTER</h5>
<hr id="hr">

<div class="row">
<div class="col-md-4">
<p id="mouse" class="bg-gray">Mouse</p>

<form id="mouseform">
  <div class="form-row align-items-center">
    
  
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      
      </select>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
        
      </select>
  
  
    </div>
  </div>
</form>
</div>

<div class="col-md-4">
<p id="mouse" class="bg-gray">Mouse</p>
</div>

<div class="col-md-4">
<p id="mouse" class="bg-gray">Mouse</p>
</div>
</div>



<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
   </div>
</footer>

</div>


   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#mouse").click(function(){
    $("#mouseform").slideDown("slow");
  });
});
</script>
</body>
</html>


