<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pilih Tampilan | Menu Utama</title>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">  
    <div class="container">

      <!-- untuk navigasi nama TOKO -->
      <a class="navbar-brand text-light" style="text-center">Outdoor Pathloss</a>
      

      <!--Navbar rata kiri -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <!-- untuk navigasi home -->
            <li class="nav-item">
            <a class="nav-link text-light" href="/pilihling" style="margin-left: 800px;"> > </a>
            </li>
        
        </ul>
      </div>            
    </div>
  </nav>
  
  <center>
  <header class="container bg-transparent text-black">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">Selamat Datang di Menu Pilihan</h1>
                <p class="lead">Silahkan pilih opsi yang tersedia!</p>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="row">
    <div class="col-sm-6">
    <div class="card" >
  <img src="/asset/Kuatsinyal.png" class="card-img-top" alt="..." width="400" height="300">
  <div class="card-body">
    <h5 class="card-title">Kuat Sinyal</h5>
    <p class="card-text">Jika Anda memilih opsi “Kuat Sinyal”, Anda akan diarahkan menuju tampilan yang akan memberikan anda informasi mengenai besar kuat sinyal pada daerah lingkungan yang Anda pilih dalam bentuk MockUp di Map.</p>
    <a href="/pilihling" class="btn btn-success">Go somewhere</a>
  </div>
</div>
</div>

<div class="col-sm-6">
<div class="card" >
  <img src="/asset/pathloss2.png" class="card-img-top" alt="..." width="400" height="300">
  <div class="card-body">
    <h5 class="card-title">Pathloss</h5>
    <p class="card-text">Jika Anda memilih opsi “PathLoss”, Anda akan diarahkan menuju tampilan yang akan memberikan anda informasi mengenai besar PathLoss berdasarkan Model Pengukuran dan Daaerah lingkungan yang Anda pilih, dengan melengkapi data ukur yang disesuaikan. </p>
    <a href="/lingkungan" class="btn btn-success">Go somewhere</a>
  </div>
</div>
</div>

</center>
</body>

</html>