<!DOCTYPE html>
<html lang="en">
<style>



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

<div class=" text-center bg-white">
  <h1> Sampah Non Organik</h1>
  <hr>
</div> 
<div class="row">
    <div class="col-md-12">
        <form action="" name="form" onsubmit="return validateForm();">
            <fieldset>
                <h4>List Jenis Sampah</h4>
                <div class="form-check">
                    <label class="form-check-label" for="check1">
                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" >Plastik
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="check2">
                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Kertas
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Botol
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="check2">
                    <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">Besi
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">Aluminium
                    </label>
                </div>
                <br>
            <pre><label for=""><h6>Berat Sampah      </h6></label><input type="text" name="berat">/kg<br></pre>
            <button type="submit" value="Submit" class="btn btn-success"  >Masukkan ke Kantong</button>
            <hr>
            </fieldset>
        </form>
    </div>
</div>

        
<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
   </div>
</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    function validateForm(){
      var x = document.forms["form"]["berat"].value;

      var regex=/(?=.*\d)./i;

      if(x == ""){
        alert("gak boleh kosong");
        return false;
      }else if(!regex.test(x)){
        alert("harus angka");
      }
    }
  </script>


</body>
</html>