@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Pesanan
                <a class="btn btn-danger float-right" href="/snack">Kembali</a>
                </div>

                <div class="card-body">
                    <form action="/snack/{{$snacks->id}}/update" method="GET">
                    @csrf
                    <div class="form-group">
                            <label for="nama_camilan">Nama camilan</label>
                            <input name="nama_camilan" type="text" class="form-control" id="nama_camilan" value="{{ ($snacks->nama_camilan) }}" placeholder="Masukkan Nama Camilan">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis camilan</label>
                            <input name="jenis" type="text" class="form-control" id="jenis" value="{{ ($snacks->jenis) }}" placeholder="Masukkan Jenis Camilan">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Camilan</label>
                            <input name="harga" type="number" class="form-control" id="harga" value="{{ ($snacks->harga) }}" placeholder="Masukkan Harga Camilan">
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
