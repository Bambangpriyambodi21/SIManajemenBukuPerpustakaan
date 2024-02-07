@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Data Buku</h1>
                    <a href="{{ url('create') }}" class="btn btn-primary">+ Book</a>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Action</th>
                        </tr>

                        @foreach($data as $dataBook)
                        <tr>
                            <td>{{ $dataBook->id }}</td>
                            <td>{{ $dataBook->judul }}</td>
                            <td>{{ $dataBook->penulis }}</td>
                            <td>{{ $dataBook->tahun_terbit }}</td>
                            <td>
                                <a href="{{ url('/show/'.$dataBook->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('/destroy/'.$dataBook->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection