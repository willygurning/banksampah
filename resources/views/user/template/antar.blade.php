<!DOCTYPE html>
<html lang="en">
<style>

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pad{
  padding-top:30px;
}

#lokasiantar,#lokasijemput{
  display:none;
  padding-top:20px;
}
#request{
  margin-top:20px;
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



 
<div class="row">
  <div class="col-md-7">
  <img src="{{asset ('assets/image/antar2crop.jpg') }}" class="center"  height="100px" width="800px" alt="">
  </div>

  <div class="col-md-5">
  <img src="{{asset ('assets/image/antarcrop.jpg') }}" class="center" height="100px" width="500px">
  </div>
</div>

<div class="container">
  <div class="row">
    <h4 class="pad">Kantong</h4>
  
    <div class="col-md-12">
    <form action="">
      
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Sampah</th>
            <th>Kondisi Sampah</th>
            <th>Jumlah Sampah</th>
            <th>Poin</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>

      <div class="row justify-content-end">
        <div class="col-3">
          <p><strong>Total Berat</strong></p>
        </div>
      </div>
    
    </form>
    </div>
  </div>

<div class="row">
  <div class="col-md-12">
    <p><strong>Metode Pembayaran</strong></p>
    <button id="btn1" class="btn btn-secondary ">Antar</button>
    <button id="btn2" class="btn btn-secondary ">Jemput</button><br>
  </div>

    <div id="lokasiantar" class="col-md-4">
    <label for=""><strong>Lokasi</strong></label><br>
      <select class="custom-select mr-sm-2" id="ddselect">  
        <option selected disabled><--Pilih Lokasi--></option>
        <option value="1">Lokasi C</option>
        <option value="2">Lokasi B</option>
        <option value="3">Lokasi A</option>
      </select><br>
      <button id="request" class="btn btn-success ">Request</button><br>
    </div>
</div>

<div class="row">
  
<div id="lokasijemput" class="col-md-4">
    <label for=""><strong>Masukkan Lokasi</strong></label><br>
      <input type="text" size="50" placeholder="alamat disini...."><br>

      <label for=""><strong>Masukkan gambar sampah</strong></label>
      <input type="file" value="upload gambar"/>
      <button id="request" class="btn btn-success ">Request</button><br>
    </div>
   
</div>

<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:</div>
</footer>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script> 
$(document).ready(function(){
  $("#btn1").click(function(){
    $("#lokasiantar").toggle( "slow");
    $("#lokasijemput").hide( "slow");
      
  });
});
</script>

<script> 
$(document).ready(function(){
  $("#btn2").click(function(){
    $("#lokasijemput").toggle( "slow");
    $("#lokasiantar").hide( "slow");
      
  });
});
</script>
      

</body>
</html>