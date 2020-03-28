<!DOCTYPE html>
<html lang="en">
<style>


hr{
    border:2px solid black;
}
#kondisi{
display:none;
padding-top:30px;
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
dfgdfgdgdgdgdgfdgdgd
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
  <h1> Sampah Pakaian</h1>
</div>   

        <div class="row" id="daftarbarang">
        <div class="col-md-4">
        <label for="">Daftar Barang</label>
        <select class="custom-select mr-sm-2" id="ddselect2">  
        <option selected disabled><--Pilih barang--></option>
        <option value="1">Baju</option>
        <option value="2">Celana</option>
        <option value="3">Jaket</option>
        <option value="4">Kaos kaki</option>
        <option value="5">Topi</option>
   
        </select>
      
        </div>
        </div>
       
        

        <div class="row" id="kondisi">
        <div class="col-md-6">
        <h4>Nama Barang:</h4>
        <p id="result"></p>
        </div>
        <div class="col-md-6">
        <h4>Kondisi Barang:</h4>
        <form name="form" action="#" onsubmit="return validateForm()" >
        <input type="text" name="rusak"><label for=""> rusak</label><br>
        <input type="text" name="rusakringan"><label for=""> rusak ringan </label><br>
        <input type="text" name="bagus"><label for=""> bagus</label><br>

        </div>
        <br>
        <button type="submit" value="Submit" class="btn btn-success"  >Masukkan ke Kantong</button>
        </form>
        </div>

<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
   </div>
</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script> 
  $(function(){
    $("#ddselect2").change(function(){
      var displaycourse = $("#ddselect2 option:selected").text();
      $("#result").text(displaycourse);
      $("#kondisi").slideDown("slow");
      $("#daftarbarang").toggle("slow");
      
    });
  });
  </script>

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