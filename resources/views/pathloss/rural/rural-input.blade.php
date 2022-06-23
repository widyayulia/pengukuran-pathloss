@extends('layouts.template')

@section('title')
Pathloss | Rural
<link rel="icon" href="/asset/SKN.png"> 
@endsection

@section('content')
<center>  <h3>Masukkan Data Yang akan</h3> </center> 
    <div>
        <div class="card bg-light">
            <div class="card-header text-center">Detil BTS</div>
            <div class="card-body">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Lintang</td>
                            <td class="text-end">{{ $dataLokasi->latitude }}</td>
                        </tr>
                        <tr>
                            <td>Bujur</td>
                            <td class="text-end">{{ $dataLokasi->longitude }}</td>
                        </tr>
                        <tr>
                            <td>hB</td>
                            <td class="text-end">{{ $dataLokasi->hB }} m</td>
                        </tr>
                        <tr>
                            <td>hM</td>
                            <td class="text-end">{{ $dataLokasi->hM }} m</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="my-3">
            <form method="post" action="{{ route('pathloss.rural.hitung') }}">
                @csrf
                <div class="form-group">
                    <label for="jarak" class="required">Jarak</label>
                    <div class="input-group mb-3">
                        <input required id="jarak" name="jarak" type="float" min="0" class="form-control" placeholder="Masukkan angka" aria-label="Masukkan angka" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon1">km</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="frekuensi" class="required">Frekuensi</label>
                    <div class="input-group mb-3">
                        <input required id="frekuensi" name="frekuensi" type="number" min="0" class="form-control" placeholder="Masukkan angka" aria-label="Masukkan angka" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">mHz</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hB" class="required">hB</label>
                    <div class="input-group mb-3">
                        <input required id="hB" name="hB" type="number" min="0" class="form-control" placeholder="Masukkan angka" aria-label="Masukkan angka" aria-describedby="basic-addon3">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon3">m</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="hM" class="required">hM</label>
                    <div class="input-group mb-3">
                        <input required id="hM" name="hM" type="number" min="0" class="form-control" placeholder="Masukkan angka" aria-label="Masukkan angka" aria-describedby="basic-addon4">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon4">m</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Amu">Amu</label>
                    <div class="input-group mb-3">
                        <input id="Amu" name="Amu" type="number" min="0" class="form-control" placeholder="Lewati apabila tidak diperlukan" aria-label="Masukkan angka" aria-describedby="basic-addon4">
                    </div>
                </div>

                <p class="text-center">Pilih Mode Perhitungan</p>
                <div class="grid-tombol">
                <div class="d-grid">
                    <input type="submit" class="btn btn-success btn-block" name="model" value="Okumura"/>
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-success btn-block" name="model" value="Hatta" />
                </div>
                <div class="d-grid">
                    <input type="submit" class="btn btn-success btn-block" name="model" value="Cost231" />
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection