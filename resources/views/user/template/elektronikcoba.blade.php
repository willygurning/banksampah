<!DOCTYPE html>
<html lang="en">
<style>

#mouse,#keyboard,#hdd,#printer,#monitor,#headset{
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
  
}
#mouseform,#keyboardform,#monitorform,#hddform,#printerform,#headsetform,#komputer{
    display:none;
}

hr{
    border:2px solid black;
}
#komputer{
  padding-top:30px;
}
#hp,#lcd,#earphone,#charger,#softcase,#memory{
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
  
}
#hpform,#lcdform,#earphoneform,#chargerform,#softcaseform,#memoryform,#handphone{
    display:none;
}

#handphone{
  padding-top:30px;
}

#kulkas,#ricecooker,#tv,#jam,#sofa,#lemari{
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
  
}
#kulkasform,#ricecookerform,#tvform,#jamform,#sofaform,#lemariform,#rumahtangga{
    display:none;
}
#rumahtangga{
  padding-top:30px;
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
<img class="komputer1" src="{{asset ('assets/image/komputer1.jpg') }}" width="280px" margin="auto">
<h3 class="komputer1">KOMPUTER</h3>
</div>

<div class="col-md-4 text-center">
<img class="handphone1" src="{{asset ('assets/image/hp2.jpg') }}" width="310px">
<h3 class="handphone1" >HANDPHONE</h3>

</div>

<div class="col-md-4 text-center">
<img class="rumahtangga1" src="{{asset ('assets/image/rumahtangga1.jpg') }}" width="300px">
<h3 class="rumahtangga1">PERLENGKAPAN RUMAH TANGGA</h3>
</div>
</div>

<div id="komputer" class="row" >
<div class="col-md-12">
<h2>Komputer</h2>
<hr>

<div class="row">
<div class="col-md-6 offset-3 box">
<p id="mouse" class="bg-gray">Mouse</p>

<form id="mouseform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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
<label for="">Kondisi Mouse:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

<p id="keyboard" class="bg-gray">Keyboard</p>
<form id="keyboardform">

  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi Keyboard:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

<p id="headset" class="bg-gray">headset</p>
<form id="headsetform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi Headset:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>
</form>

<p id="hdd" class="bg-gray">Hard Disk</p>
<form id="hddform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi Hard Disk:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div> 
</form>


<p id="monitor" class="bg-gray">Monitor</p>
<form id="monitorform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi Monitor:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>
  
</form>

<p id="printer" class="bg-gray">Printer</p>
<form id="printerform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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
      <label for="">Kondisi Printer:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

</div>
</div>
</div>
</div>

<div id="handphone" class="row" >
<div class="col-md-12">
<h2>Handphone</h2>
<hr>

<div class="row">
<div class="col-md-6 offset-3 box">
<p id="hp" class="bg-gray">hp</p>

<form id="hpform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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
<label for="">Kondisi hp:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

<p id="lcd" class="bg-gray">lcd</p>
<form id="lcdform">

  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi lcd:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

<p id="earphone" class="bg-gray">earphone</p>
<form id="earphoneform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi earphone:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>
</form>

<p id="charger" class="bg-gray">charger</p>
<form id="chargerform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi charger:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div> 
</form>


<p id="softcase" class="bg-gray">soft case</p>
<form id="softcaseform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi SoftCase:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>
  
</form>

<p id="memory" class="bg-gray">Memory</p>
<form id="memoryform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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
      <label for="">Kondisi Memory:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

</div>
</div>
</div>
</div>



<div id="rumahtangga" class="row" >
<div class="col-md-12">
<h2>Perlengkapan Rumah Tangga</h2>
<hr>

<div class="row">
<div class="col-md-6 offset-3 box">
<p id="kulkas" class="bg-gray">Kulkas</p>

<form id="kulkasform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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
<label for="">Kondisi Kulkas:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

<p id="ricecooker" class="bg-gray">Rice Cooker</p>
<form id="ricecookerform">

  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi ricecooker:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

<p id="tv" class="bg-gray">Tv</p>
<form id="tvform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi Tv:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>
</form>

<p id="sofa" class="bg-gray">Sofa</p>
<form id="sofaform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi Sofa:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div> 
</form>


<p id="jam" class="bg-gray">Jam</p>
<form id="jamform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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

      <label for="">Kondisi Jam:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>
  
</form>

<p id="lemari" class="bg-gray">Lemari</p>
<form id="lemariform">
  <div class="form-group align-items-center">
  <label for="">Jumlah:</label>
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
      <label for="">Kondisi Lemari:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">  
        <option value="Bagus">Bagus</option>
        <option value="Rusak Ringan">Rusak Ringan</option>
        <option value="Rusak Berat">Rusak Berat</option>
      </select>
    </div>
    <div class="row text-center">
    <div class="col-md-12">
    <button type="button" class="btn btn-success">Masukkan Kantong</button>
    </div>
    </div>

</form>

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
$(document).ready(function(){
  $(".komputer1").click(function(){
    $("#komputer").toggle( "slow","swing" );
    $("#handphone").slideUp("slow");
    $("#rumahtangga").slideUp("slow");
    
  });
});
</script>


<script> 
$(document).ready(function(){
  $("#mouse").click(function(){
    $("#mouseform").slideDown("slow");
    $("#keyboardform").slideUp("slow");
    $("#headsetform").slideUp("slow");
    $("#hddform").slideUp("slow");
    $("#monitorform").slideUp("slow");
    $("#printerform").slideUp("slow");
    
  });
});

</script>
<script>
$(document).ready(function(){
  $("#keyboard").click(function(){
    $("#keyboardform").slideDown("slow");
    $("#mouseform").slideUp("slow");
    $("#headsetform").slideUp("slow");
    $("#hddform").slideUp("slow");
    $("#monitorform").slideUp("slow");
    $("#printerform").slideUp("slow");
    
  });
});
</script>
<script>
$(document).ready(function(){
  $("#headset").click(function(){
    $("#headsetform").slideDown("slow");
    $("#mouseform").slideUp("slow");
    $("#keyboardform").slideUp("slow");
    $("#hddform").slideUp("slow");
    $("#monitorform").slideUp("slow");
    $("#printerform").slideUp("slow");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#hdd").click(function(){
    $("#hddform").slideDown("slow");
    $("#mouseform").slideUp("slow");
    $("#headsetform").slideUp("slow");
    $("#keyboardform").slideUp("slow");
    $("#monitorform").slideUp("slow");
    $("#printerform").slideUp("slow");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#monitor").click(function(){
    $("#monitorform").slideDown("slow");
    $("#mouseform").slideUp("slow");
    $("#headsetform").slideUp("slow");
    $("#hddform").slideUp("slow");
    $("#keyboardform").slideUp("slow");
    $("#printerform").slideUp("slow");
  });
});
</script>
<script>
$(document).ready(function(){
  $("#printer").click(function(){
    $("#printerform").slideDown("slow");
    $("#mouseform").slideUp("slow");
    $("#headsetform").slideUp("slow");
    $("#hddform").slideUp("slow");
    $("#monitorform").slideUp("slow");
    $("#keyboardform").slideUp("slow");
  });
});
</script>


<script> 
$(document).ready(function(){
  $(".handphone1").click(function(){
    $("#handphone").toggle( "slow","swing" );
    $("#komputer").slideUp("slow");
    $("#rumahtangga").slideUp("slow");
    
    
  });
});
</script>


<script> 
$(document).ready(function(){
  $("#hp").click(function(){
    $("#hpform").slideDown("slow");
    $("#lcdform").slideUp("slow");
    $("#earphoneform").slideUp("slow");
    $("#chargerform").slideUp("slow");
    $("#softcaseform").slideUp("slow");
    $("#memoryform").slideUp("slow");
    
  });
});

</script>
<script>
$(document).ready(function(){
  $("#lcd").click(function(){
    $("#lcdform").slideDown("slow");
    $("#hpform").slideUp("slow");
    $("#earphoneform").slideUp("slow");
    $("#chargerform").slideUp("slow");
    $("#softcaseform").slideUp("slow");
    $("#memoryform").slideUp("slow");
    
  });
});
</script>
<script>
$(document).ready(function(){
  $("#earphone").click(function(){
    $("#earphoneform").slideDown("slow");
    $("#lcdform").slideUp("slow");
    $("#hpform").slideUp("slow");
    $("#chargerform").slideUp("slow");
    $("#softcaseform").slideUp("slow");
    $("#memoryform").slideUp("slow");
      });
});
</script>
<script>
$(document).ready(function(){
  $("#charger").click(function(){
    $("#chargerform").slideDown("slow");
    $("#lcdform").slideUp("slow");
    $("#earphoneform").slideUp("slow");
    $("#hpform").slideUp("slow");
    $("#softcaseform").slideUp("slow");
    $("#memoryform").slideUp("slow");
      });
});
</script>
<script>
$(document).ready(function(){
  $("#softcase").click(function(){
    $("#softcaseform").slideDown("slow");
    $("#lcdform").slideUp("slow");
    $("#earphoneform").slideUp("slow");
    $("#chargerform").slideUp("slow");
    $("#hpform").slideUp("slow");
    $("#memoryform").slideUp("slow");
    
  });
});
</script>
<script>
$(document).ready(function(){
  $("#memory").click(function(){
    $("#memoryform").slideDown("slow");
    $("#lcdform").slideUp("slow");
    $("#earphoneform").slideUp("slow");
    $("#chargerform").slideUp("slow");
    $("#softcaseform").slideUp("slow");
    $("#hpform").slideUp("slow");
    
  });
});
</script>


<script> 
$(document).ready(function(){
  $(".rumahtangga1").click(function(){
    $("#rumahtangga").toggle( "slow","swing" );
    $("#komputer").slideUp("slow");
    $("#handphone").slideUp("slow");
    
  });
});
</script>


<script> 
$(document).ready(function(){
  $("#kulkas").click(function(){
    $("#kulkasform").slideDown("slow");
    $("#ricecookerform").slideUp("slow");
    $("#tvform").slideUp("slow");
    $("#jamform").slideUp("slow");
    $("#sofaform").slideUp("slow");
    $("#lemariform").slideUp("slow");
    
  });
});

</script>
<script>
$(document).ready(function(){
  $("#ricecooker").click(function(){
    $("#ricecookerform").slideDown("slow");
    $("#kulkasform").slideUp("slow");
    $("#tvform").slideUp("slow");
    $("#jamform").slideUp("slow");
    $("#sofaform").slideUp("slow");
    $("#lemariform").slideUp("slow");
    
  });
});
</script>
<script>
$(document).ready(function(){
  $("#tv").click(function(){
    $("#tvform").slideDown("slow");
    $("#ricecookerform").slideUp("slow");
    $("#kulkasform").slideUp("slow");
    $("#jamform").slideUp("slow");
    $("#sofaform").slideUp("slow");
    $("#lemariform").slideUp("slow");
    });
});
</script>
<script>
$(document).ready(function(){
  $("#jam").click(function(){
    $("#jamform").slideDown("slow");
    $("#ricecookerform").slideUp("slow");
    $("#tvform").slideUp("slow");
    $("#kulkasform").slideUp("slow");
    $("#sofaform").slideUp("slow");
    $("#lemariform").slideUp("slow");
        });
});
</script>
<script>
$(document).ready(function(){
  $("#sofa").click(function(){
    $("#sofaform").slideDown("slow");
    $("#lcdform").slideUp("slow");
    $("#earphoneform").slideUp("slow");
    $("#chargerform").slideUp("slow");
    $("#hpform").slideUp("slow");
    $("#memoryform").slideUp("slow");
    
  });
});
</script>
<script>
$(document).ready(function(){
  $("#lemari").click(function(){
    $("#lemariform").slideDown("slow");
    $("#ricecookerform").slideUp("slow");
    $("#tvform").slideUp("slow");
    $("#jamform").slideUp("slow");
    $("#sofaform").slideUp("slow");
    $("#kulkasform").slideUp("slow");
      
  });
});
</script>



</body>
</html>