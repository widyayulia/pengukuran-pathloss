<!DOCTYPE html>
<html lang="en">

<head>
<!-- <style>
.container {
  display: grid;
  grid-template-columns: auto;
  gap: 10px;
}

@media only screen and (min-width: 600px) {
  .container {
    grid-template-columns: 10px 100px;
  }
}

@media only screen and (min-width: 1200px) {
  .container {
    grid-template-columns: auto auto auto;
  }
} 
    </style> -->
    
<link rel="icon" href="/asset/SKN.png"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PathLoss | Lingkungan</title>
    <link href="{{ asset('css/particle.css') }}" rel="stylesheet">
</head>

<body>
<div id="particles-js"></div>
<div id="content">
<center> 
  
  <header class="container bg-transparent text-black">
          <div class="row">
              <div class="col-12 py-4 text-center">
                  <h1 class="display-1 fw-bold">Halaman Lingkungan</h1>
                  <p class="display-6">Pilihlah daerah ukur yang sesuai dengan perthitungan pathloss berikut!</p>
              </div>
          </div>
      </header>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
      <div class="row">
      <div class="col-sm-4">
      <div class="card">
    <!-- <img src="/asset/rural.png" class="card-img-top" alt="..." width="400" height="300"> -->
    <div class="card-body">
      <h5 class="card-title">Rural</h5>
      <a href="{{ route('pathloss.rural.input') }}" class="btn btn-success">Hitung Pathloss</a>
    </div>
  </div>
  </div>
  
  <div class="col-sm-4">
  <div class="card" >
    <!-- <img src="/asset/suburban.png" class="card-img-top" alt="..." width="400" height="300"> -->
    <div class="card-body">
      <h5 class="card-title">Suburban</h5>
      <a href="{{ route('pathloss.suburban.bts') }}" class="btn btn-success">Hitung Pathloss</a>
    </div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="card" >
    <!-- <img src="/asset/urban.png" class="card-img-top" alt="..." width="400" height="300"> -->
    <div class="card-body">
      <h5 class="card-title">Urban</h5>
      <a href="{{ route('pathloss.urban.bts') }}" class="btn btn-success">Hitung Pathloss</a>
    </div>
  </div>
  </div>
</div>
  




<!-- <h1>Halaman Lingkungan</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <div class="btn-group">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Jenis Lingkungan
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <li><a class="dropdown-item" href="{{ route('pathloss.rural.input') }}">Rural</a></li> 
    <li><a class="dropdown-item" href="{{ route('pathloss.rural.input') }}">Rural</a></li>
    <li><a class="dropdown-item" href="{{ route('pathloss.suburban.bts') }}">Suburban</a></li>
    <li><a class="dropdown-item" href="{{ route('pathloss.urban.bts') }}">Urban</a></li>
  </ul>
</div> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>