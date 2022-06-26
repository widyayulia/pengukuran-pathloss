@extends('layouts.template')

@section('title')
Pathloss | Suburban
@endsection

@section('content')
<div class="card card-hover">
        <h3>Hasil Hitung</h3>
        <p> {{$hasil}} dB</p>
    </div>
    <style>
        .card {
            position: absolute;
            top: 30%;
            left: 0;
            right: 0;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding: 32px;
        }
    </style>
@endsection