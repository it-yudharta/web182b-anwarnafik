@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Pesanan
                <a class="btn btn-danger float-right" href="/food">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="/food/{{$foods->id}}/update" method="GET">
                    @csrf
                    <div class="form-group">
                            <label for="nama_makanan">Nama Makanan</label>
                            <input name="nama_makanan" type="text" class="form-control" id="nama_makanan" value="{{ ($foods->nama_makanan) }}" placeholder="Masukkan Nama Makanan">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Makanan</label>
                            <input name="jenis" type="text" class="form-control" id="jenis" value="{{ ($foods->jenis) }}" placeholder="Masukkan Jenis Makanan">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Makanan</label>
                            <input name="harga" type="number" class="form-control" id="harga" value="{{ ($foods->harga) }}" placeholder="Masukkan Harga Makanan">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
