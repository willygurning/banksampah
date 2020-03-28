<!DOCTYPE html>
<html lang="en">
<style>


hr{
    border:2px solid black;
}
#kondisihp,#kondisi,#kondisirumahtangga{
display:none;
padding-top:30px;
}
#hp,#komputer,#rumahtangga{
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
<img class="komputer1" src="{{asset ('assets/image/komputer1.jpg') }}" width="280px" margin="auto">
<h5 class="komputer1">KOMPUTER</h5>
</div>

<div class="col-md-4 text-center">
<img class="handphone1" src="{{asset ('assets/image/hp2.jpg') }}" width="310px">
<h5 class="handphone1" >HANDPHONE</h5>

</div>

<div class="col-md-4 text-center">
<img class="rumahtangga1" src="{{asset ('assets/image/rumahtangga1.jpg') }}" width="300px">
<h5 class="rumahtangga1">PERLENGKAPAN RUMAH TANGGA</h5>
</div>
</div>


        <div class="row" id="hp">
    <div class="col-md-12">
        
        <h4>Handphone</h4>
        <hr>
        <div class="row" id="daftarhp">
        <div class="col-md-4">
        <label for="">Daftar Barang</label>
        <select class="custom-select mr-sm-2" id="ddselecthp">  
        <option selected disabled><--Pilih barang--></option>
        <option value="1">Telepon Seluler</option>
        <option value="2">Kabel Data dan Charger</option>
        <option value="3">Casing</option>
        <option value="4">Power Bank</option>
        <option value="5">Earphone</option>
        </select>
      
        </div>
        </div>
        </div>
        </div>

        <div class="row" id="kondisihp">
        <div class="col-md-6">
        <h4>Nama Barang:</h4>
        <p id="resulthp"></p>
        </div>
        <div class="col-md-6" id="a">
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

        <div class="row" id="komputer">
       <div class="col-md-12">
        
        <h4>Komputer</h4>
        <hr>
        <div class="row" id="daftarbarang">
        <div class="col-md-4">
        <label for="">Daftar Barang</label>
        <select class="custom-select mr-sm-2" id="ddselect2">  
        <option selected disabled><--Pilih barang--></option>
        <option value="1">Hardisk</option>
        <option value="2">Mouse</option>
        <option value="3">Monitor</option>
        <option value="4">Keyboard</option>
        <option value="5">Speaker</option>
        <option value="6">Printer</option>
        <option value="7">CPU</option>
        </select>
      
        </div>
        </div>
        </div>
        </div>

        <div class="row" id="kondisi">
        <div class="col-md-6">
        <h4>Nama Barang:</h4>
        <p id="result"></p>
        </div>
        <div class="col-md-6">
        <h4>Kondisi Barang:</h4>
        <form name="form1" action="#" onsubmit="return validateForm1()" >
        <input type="text" name="rusak1"><label for=""> rusak</label><br>
        <input type="text" name="rusakringan1"><label for=""> rusak ringan </label><br>
        <input type="text" name="bagus1"><label for=""> bagus</label><br>

        </div>
        <br>
        <button type="submit" value="Submit" class="btn btn-success"  >Masukkan ke Kantong</button>
        </form>
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
        <option value="1">TV</option>
        <option value="2">Kulkas</option>
        <option value="3">Mesin Cuci</option>
        <option value="4">Vacuum Cleaner</option>
        <option value="5">Kamere</option>
        <option value="6">Jam</option>
        <option value="7">Blender</option>
        <option value="8">Dispencer</option>
        <option value="9">Setrika</option>
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
        <form name="form2" action="#" onsubmit="return validateForm2()">
        <input type="text" name="rusak2"><label for=""> rusak </label><br>
        <input type="text" name="rusakringan2"><label for=""> rusak ringan </label><br>
        <input type="text" name="bagus2"><label for=""> bagus</label><br>
        
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
  $(".handphone1").click(function(){
    $("#komputer").slideUp("slow"); 
    $("#kondisi").slideUp("slow"); 
    $("#rumahtangga").slideUp("slow");
    $("#kondisirumahtangga").slideUp("slow"); 
    
  });
});

</script>

<script>
$(document).ready(function(){
  $(".komputer1").click(function(){
    $("#hp").slideUp("slow"); 
    $("#kondisihp").slideUp("slow"); 
    $("#rumahtangga").slideUp("slow");
    $("#kondisirumahtangga").slideUp("slow"); 

  });
});

</script>

<script>
$(document).ready(function(){
  $(".rumahtangga1").click(function(){ 
    $("#hp").slideUp("slow"); 
    $("#kondisihp").slideUp("slow"); 
    $("#komputer").slideUp("slow"); 
    $("#kondisi").slideUp("slow"); 
    
    
  });
});

</script>

<script> 
$(document).ready(function(){
  $(".handphone1").click(function(){
    $("#hp").toggle( "slow");  
    $("#kondisihp").slideUp("slow");
    $("#daftarhp").slideDown("slow");
  
    
  });
});

  $(function(){
    $("#ddselecthp").change(function(){
      var displaycourse = $("#ddselecthp option:selected").text();
      $("#resulthp").text(displaycourse);
      $("#kondisihp").slideDown("slow");
      $("#daftarhp").toggle("slow");
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


<script> 
$(document).ready(function(){
  $(".komputer1").click(function(){
    $("#komputer").toggle( "slow");  
    $("#kondisi").slideUp("slow");
    $("#daftarbarang").slideDown("slow");
    
  });
});

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
  function validateForm1(){
    var x = document.forms["form1"]["rusak1"].value;
    var y = document.forms["form1"]["bagus1"].value;
    var z = document.forms["form1"]["rusakringan1"].value;
    var regex=/(?=.*\d)./i;

    if(x == "" && y =="" && z == ""){
      alert("gak boleh kosong");
      return false;
    }else if(!regex.test(x) && !regex.test(y) && !regex.test(z)){
      alert("harus angka");
    }
    
  }
</script>


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

</script>
  
  <script type="text/javascript">
  function validateForm2(){
    var x = document.forms["form2"]["rusak2"].value;
    var y = document.forms["form2"]["bagus2"].value;
    var z = document.forms["form2"]["rusakringan2"].value;
    var regex=/(?=.*\d)./i;

    if(x == "" && y =="" && z == ""){
      alert("gak boleh kosong");
      return false;
    }else if(!regex.test(x) && !regex.test(y) && !regex.test(z)){
      alert("harus angka");
    }
    
  }2
</script>

</body>
</html>