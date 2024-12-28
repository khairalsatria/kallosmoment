@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Gallery</h4>
                        <p class="card-description">
                            Form untuk mengedit gambar gallery
                        </p>
                        <form action="{{ route('admin-gallery.update', $gallery->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="image_gallery">Gambar Gallery</label>
                                <div>
                                    @if($gallery->image_gallery)
                                        <img src="{{ asset('storage/' . $gallery->image_gallery) }}" alt="Gambar Gallery" class="img-fluid mb-2" style="max-width: 100%; height: auto;">
                                    @else
                                        <p>Tidak ada gambar</p>
                                    @endif
                                </div>
                                <input type="file" class="form-control @error('image_gallery') is-invalid @enderror" id="image_gallery" name="image_gallery">
                                @error('image_gallery')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                            </div>

                            <div class="form-group">
                                <label for="text">Deskripsi</label>
                                <textarea class="form-control @error('text') is-invalid @enderror" id="text" name="text" placeholder="Masukkan Deskripsi">{{ old('text', $gallery->text) }}</textarea>
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
