@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Gallery</h4>
                        <p class="card-description">
                            Form untuk menambahkan gambar ke gallery
                        </p>
                        <form action="{{ route('admin-gallery.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="image_gallery">Gambar Gallery</label>
                                <input type="file" class="form-control @error('image_gallery') is-invalid @enderror" id="image_gallery" name="image_gallery" required>
                                @error('image_gallery')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="text">Deskripsi</label>
                                <textarea class="form-control @error('text') is-invalid @enderror" id="text" name="text" placeholder="Masukkan Deskripsi">{{ old('text') }}</textarea>
                                @error('text')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('admin-gallery.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
