@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Buku</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-grup">
                        <label for="nama">Judul Buku *</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Penulis *</label>
                        <input type="text" name="penulis" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tahun Terbit *</label>
                        <input type="text" name="tahun_terbit" class="form-control">
                    </div>

                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Buku</button>
                    </div>

                    <div class="form-grup mt-2">
                        <a href="{{ url('/index') }}">Kembali ke halaman utama</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
@endsection