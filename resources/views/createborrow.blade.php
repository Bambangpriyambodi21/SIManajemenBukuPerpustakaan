@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Pinjaman</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/borrow/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-grup">
                        <label for="nama">Tanggal Pinjam *</label>
                        <input type="text" name="tgl_pinjam" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tanggal Kembali *</label>
                        <input type="text" name="tgl_kembali" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">ID Buku *</label>
                        <input type="text" name="id_buku" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Status *</label>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Email *</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Pinjaman</button>
                    </div>

                    <div class="form-grup mt-2">
                        <a href="{{ url('/borrow/index') }}">Kembali ke halaman utama</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
@endsection