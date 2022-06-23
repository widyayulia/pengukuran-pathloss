<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        /* .container {
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
} */

        .grid-tombol {
            display: grid;
            grid-template-columns: auto;
            gap: 1rem;
        }

        .required::after {
            content: '*';
            color: red;
        }

        @media only screen and (min-width: 600px){
            .grid-tombol {
                grid-template-columns: auto auto auto;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    @yield('content')
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>