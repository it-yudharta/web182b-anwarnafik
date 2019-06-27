@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Makanan Ringan
                <a class="btn btn-primary float-right" href="/snack/tambah">Tambah</a>
                </div>

                {{ $snacks->links() }}
                <div class="card-body">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Camilan</td>
                            <td>Jenis</td>
                            <td>Harga</td>
                            <td>Manage Data</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($snacks as $x)
                        <tr>
                            <td>{{ $x->id }}</td>
                            <td>{{ $x->nama_camilan }}</td>
                            <td>{{ $x->jenis }}</td>
                            <td>{{ $x->harga }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/snack/{{ $x->id }}/edit">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/snack/{{ $x->id }}/delete">Hapus</a>
                            <td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
