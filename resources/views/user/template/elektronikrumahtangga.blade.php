<!DOCTYPE html>
<html lang="en">
<style>


hr{
    border:2px solid black;
}
#kondisirumahtangga{
display:none;
padding-top:30px;
}
#rumahtangga{
  display:none;
}
input{
  width:40px;
  text-align:center;
}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.min.css') }}">
   
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
  <h1> Sampah Elektronik</h1>

</div>   
<div class="row">

<div class="col-md-4 text-center">
<a href="http://localhost:81/banksampah/public/tukar/elektronikkomputer"><img class="komputer1" src="{{asset ('assets/image/komputer1.jpg') }}" width="280px" margin="auto"></a>
<h3 class="komputer1">KOMPUTER</h3>
</div>

<div class="col-md-4 text-center">
<a href="http://localhost:81/banksampah/public/tukar/elektronikhp"><img class="handphone1" src="{{asset ('assets/image/hp2.jpg') }}" width="310px"></a>
<h3 class="handphone1" >HANDPHONE</h3>
</div>

<div class="col-md-4 text-center">
<img class="rumahtangga1" src="{{asset ('assets/image/rumahtangga1.jpg') }}" width="300px">
<h3 class="rumahtangga1">PERLENGKAPAN RUMAH TANGGA</h3>
</div>
</div>


        <div class="row" id="rumahtangga">
        <div class="col-md-12">
        
        <h4>Peralatan Rumah Tangga</h4>
        <hr>
        <div class="row" id="daftarrumahtangga">
        <div class="col-md-4">
        <label for="">Daftar Barang</label>
        <select class="custom-select mr-sm-2" id="ddselectrumahtangga">  
        <option selected disabled><--Pilih barang--></option>
        <option value="1">Mouse</option>
        <option value="2">Hard Disk</option>
        <option value="3">Ram</option>
        <option value="4">Keyboard</option>
        <option value="5">Charger</option>
        <option value="6">Motherboard</option>
        </select>
      
        </div>
        </div>
        </div>
        </div>

        <div class="row" id="kondisirumahtangga">
        <div class="col-md-6">
        <h4>Nama Barang:</h4>
        <p id="resultrumahtangga"></p>
        </div>
        <div class="col-md-6">
        <h4>Kondisi Barang:</h4>
        <form name="form" action="#" onsubmit="return validateForm()">
        <input type="text" name="rusak"><label for=""> rusak</label><br>
        <input type="text" name="rusakringan"><label for=""> rusak ringan </label><br>
        <input type="text" name="bagus"><label for=""> bagus</label><br>
        
        <br>
        <button type="submit" value="Submit" class="btn btn-success"  >Masukkan ke Kantong</button>
        </form>
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
  $(".rumahtangga1").click(function(){
    $("#rumahtangga").toggle( "slow");  
    $("#kondisirumahtangga").slideUp("slow");
    $("#daftarrumahtangga").slideDown("slow");
  
    
  });
});

  $(function(){
    $("#ddselectrumahtangga").change(function(){
      var displaycourse = $("#ddselectrumahtangga option:selected").text();
      $("#resultrumahtangga").text(displaycourse);
      $("#kondisirumahtangga").slideDown("slow");
      $("#daftarrumahtangga").toggle("slow");
    });
  });
  </script>
  
    <script type="text/javascript">
    function validateForm(){
      var x = document.forms["form"]["rusak"].value;
      var y = document.forms["form"]["bagus"].value;
      var z = document.forms["form"]["rusakringan"].value;
      var regex=/(?=.*\d)./i;

      if(x == "" && y =="" && z == ""){
        alert("gak boleh kosong");
        return false;
      }else if(!regex.test(x) && !regex.test(y) && !regex.test(z)){
        alert("harus angka");
      }
      
    }
  </script>


</body>
</html>