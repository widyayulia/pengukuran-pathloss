<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="/asset/SKN.png"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/particle.css') }}" rel="stylesheet">
    <title>Kuat Sinyal | Lingkungan</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">  
        <div class="container">

          <!-- untuk navigasi nama TOKO -->
          <a class="navbar-brand text-light" style="text-center">Indoor Pathloss</a>
            
          <!--Navbar rata kiri -->
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- untuk navigasi home -->
                <li class="nav-item">
                  <a class="nav-link text-light" href="/pilihtampilan" style="margin-left: 800px;">Back</a>
                </li>
            
            </ul>
          </div>            
        </div>
      </nav>
      <div>
        <div id="particles-js"></div>
        <div id="content">
          <header class="container bg-transparent text-black">
                <div class="row">
                    <div class="col-12 py-4 text-center">
                        <h1 class="display-3 fw-bold mt-5">Halaman Lingkungan</h1>
                        <p class="display-6">Silahkan pilih opsi yang tersedia!</p>
                    </div>
                </div>
          </header>

          <div class="row mx-5">
            <div class="col-sm-4">
              <div class="card-hover">
                <img src="/asset/rural.png" class="card-img-top" alt="..." width="400" height="300">
                <div class="card-body">
                  <h5 class="card-title fs-3 fw-bold">Rural</h5>
                  <p class="card-text">Wilayah yang mempunyai kegiatan utama pertanian, termasuk pengelolaan sumber kekuatan alam dengan bangunan fungsi kawasan sebagai tempat permukiman pedesaan.</p>
                  <a href="/rural" class="btn btn-success">Go somewhere</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card-hover" >
                <img src="/asset/suburban.png" class="card-img-top" alt="..." width="400" height="300">
                <div class="card-body">
                  <h5 class="card-title fs-3 fw-bold">Suburban</h5>
                  <p class="card-text">Suatu daerah disekitar pusat kota yang berfungsi sebagai daerah permukiman dan manufaktur (pabrik).</p>
                  <a href="/suburban" class="btn btn-success">Go somewhere</a>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="card-hover" >
                <img src="/asset/urban.png" class="card-img-top" alt="..." width="400" height="300">
                <div class="card-body">
                  <h5 class="card-title fs-3 fw-bold">Urban</h5>
                  <p class="card-text">Kawasan wilayah yang digunakan sebagai tempat permukiman perkotaan, pemusatan dan distribusi pelayanan jasa pemerintahan, pelayanan sosial, dan kegiatan ekonomi. </p>
                  <a href="/urban" class="btn btn-success">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>