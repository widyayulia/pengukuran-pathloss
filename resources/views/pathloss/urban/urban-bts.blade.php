@extends('layouts.template')

@section('title')
Pathloss | Urban
@endsection

@section('content')
   <center> 
   
   <header class="container bg-transparent text-black">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">Lokasi BTS Urban</h1>
                <p class="lead">Silahkan pilih opsi yang tersedia!</p>
            </div>
        </div>
    </header>

   </center>
    @foreach($lokasi as $lok)
    <center>   
    
    <div class="row-center">

<div class="col-sm-6">
<div class="card">
<div class="card-header">
Lokasi BTS 
</div>
<div class="card-body">
<p>  Bujur: {{$lok->longitude}}. Lintang: {{ $lok->latitude }}</p>
<a href="{{ route('pathloss.urban.input', $lok->id) }}" class="btn btn-success">Pilih</a>
</div>
</div>
</div>
</div>

</center> 
    @endforeach
@endsection