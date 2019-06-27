@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Minuman
                    <a class="btn btn-primary float-right" href="/drink/tambah">Tambah</a>
                </div>

                <div class="card-body">
                    <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Minuman</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Manage Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($drinks as $x)
                        <tr>
                            <td>{{ $x->id }}</td>
                            <td>{{ $x->nama_minuman }}</td>
                            <td>{{ $x->jenis }}</td>
                            <td>{{ $x->harga }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="/drink/{{ $x->id }}/edit">Edit</a>
                                <a class="btn btn-danger btn-sm" href="/drink/{{ $x->id }}/delete">Hapus</a>
                             </td>
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
