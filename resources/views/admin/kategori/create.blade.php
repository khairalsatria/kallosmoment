@extends('admin.layout.main')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Kategori</h4>
                            <p class="card-description">
                                Form untuk menambahkan kategori baru
                            </p>
                            <form action="{{ route('admin-kategori.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="kode_kategori">Kode Kategori</label>
                                    <input type="text" class="form-control @error('kode_kategori') is-invalid @enderror" id="kode_kategori" name="kode_kategori" placeholder="Masukkan Kode Kategori" value="{{ old('kode_kategori') }}">
                                    @error('kode_kategori')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nama_kategori">Nama Kategori</label>
                                    <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Nama Kategori" value="{{ old('nama_kategori') }}">
                                    @error('nama_kategori')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukkan Harga" value="{{ old('harga') }}" min="0">
                                    @error('harga')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="gambar_kategori">Gambar Kategori</label>
                                    <input type="file" class="form-control @error('gambar_kategori') is-invalid @enderror" id="gambar_kategori" name="gambar_kategori" required>
                                    @error('gambar_kategori')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                <a href="{{ route('admin-kategori.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
