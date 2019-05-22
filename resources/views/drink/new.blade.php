@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Pesanan</div>

                <div class="card-body">
                    <form action="/drink/store" method="GET">
                    <div class="form-group">
                            <label for="nama_minuman">Nama Minuman</label>
                            <input name="nama_minuman" type="text" class="form-control" id="nama_minuman" placeholder="Masukkan Nama Minuman">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Minuman</label>
                            <input name="jenis" type="text" class="form-control" id="jenis" placeholder="Masukkan Jenis Minuman">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Minuman</label>
                            <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukkan Harga Minuman">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
