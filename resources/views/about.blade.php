 @extends ('layouts.main')

 @section ('container')

    <h1>Halaman About</h1>
    <h3><?= $nama; ?></h3>
    <h4><?= $nrp; ?></h4>
    <h5><?= $prodi; ?></h5>
    <p><?= $email; ?></p>

    @endsection

