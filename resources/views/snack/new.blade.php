@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Pesanan</div>

                <div class="card-body">
                    <form action="/snack/store" method="GET">
                    <div class="form-group">
                            <label for="nama_camilan">Nama Camilan</label>
                            <input name="nama_camilan" type="text" class="form-control" id="nama_camilan" placeholder="Masukkan Nama Camilan">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Camilan</label>
                            <input name="jenis" type="text" class="form-control" id="jenis" placeholder="Masukkan Jenis Camilan">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Camilan</label>
                            <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukkan Harga Camilan">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
