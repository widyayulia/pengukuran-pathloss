<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDOOR</title>

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<!--My Font-->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<!-- My CSS -->
<link rel="stylesheet" href="#">

</head>
<body>

	<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary text-light">  
    <div class="container">

      <!-- Nama Web -->
      <a class="navbar-brand text-light" style="text-center"> Pathloss Viewer</a>

      <!--Navbar rata kiri -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

              
        </ul>
      </div>            
    </div>
  </nav> 
  <br>
<!-- Gambar Denah -->
<p><img src="in2.png" style="width:800px;height:500px;" align="middle"></p>

<br>

<!-- Input ITU Path Loss -->
<div style="margin-left: 20px;">
<p>Rumus ITU Path Loss</p>
</div>

 <form name="form" style="margin-left: 20px;">
  <span>Inputkan Disini!  </span>
  <b></b>
  <input type="text" name="angka1" size="3" placeholder="Lfsd"> 
  <b>+</b>
  <input type="text" name="angka2" size="3" placeholder="Amu">
  <b>-</b>
  <input type="text" name="angka3" size="3" placeholder="G(Hb)">
  <b>-</b>
  <input type="text" name="angka4" size="3" placeholder="G(Hm)">
  <b>-</b>
  <input type="text" name="angka5" size="3" placeholder="GAREA">
  <b>=</b>
  <input type="text" name="hasil" size="6" value=""><b>dB</b><br><br>
  <input type="button" onclick="Hasil1()" value="Hasil1">
  <input type="reset"  onclick="clear()" value="CLEAR">
 </form>

<!-- javascript -->
 <script>
  function cek(){
   if (form.angka1.value == "" || form.angka2.value == "" || form.angka3.value == "" || form.angka4.value == "" || form.angka5.value == "") {
    alert("Harap isi nilai dengan lengkap");
    exit
   }
  }

  function Hasil1(){
   cek();
   a = parseInt(form.angka1.value);
   b = parseInt(form.angka2.value);
   c = parseInt(form.angka3.value);
   d = parseInt(form.angka4.value);
   E = parseInt(form.angka4.value);
   form.hasil.value = a+b-c-d-e;
  }
 </script>
 <br>
 <br>



<!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->  

</body>
</html>