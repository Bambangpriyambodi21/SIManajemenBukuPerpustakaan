@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Data Peminjaman Buku</h1>
                    <a href="{{ url('/borrow/create') }}" class="btn btn-primary">+ Book</a>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>ID Buku</th>
                            <th>Status</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>

                        @foreach($data as $dataBorrow)
                        <tr>
                            <td>{{ $dataBorrow->id }}</td>
                            <td>{{ $dataBorrow->tgl_pinjam }}</td>
                            <td>{{ $dataBorrow->tgl_kembali }}</td>
                            <td>{{ $dataBorrow->id_buku }}</td>
                            <td>{{ $dataBorrow->status }}</td>
                            <td>{{ $dataBorrow->email }}</td>
                            <td>
                                <a href="{{ url('/borrow/show/'.$dataBorrow->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('/borrow/destroy/'.$dataBorrow->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection