@extends('layouts.template')

@section('title')

Pathloss | Rural
@endsection

@section('content')
<center> 
   <h3>Hasil Hitung </h3>
   <p> {{$hasil}} dB</p>
    <!-- <a class="btn btn-outline-secondary" type="button" href="{{ route('pathloss.rural.map') }}">
            Tampilkan Map
        </a> -->
</center>
@endsection