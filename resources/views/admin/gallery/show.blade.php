@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Gallery</h4>
                        <p class="card-description">
                            Informasi detail tentang gambar gallery
                        </p>

                        <div class="form-group">
                            <label for="image_gallery">Gambar Gallery</label>
                            <div>
                                @if($gallery->image_gallery)
                                    <img src="{{ asset('storage/' . $gallery->image_gallery) }}" alt="Gambar Gallery" class="img-fluid" style="max-width: 100%; height: auto;">
                                @else
                                    <p>Tidak ada gambar</p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="text">Deskripsi</label>
                            <p>{{ $gallery->text ?? 'Tidak ada deskripsi' }}</p>
                        </div>

                        <a href="{{ route('admin-gallery.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
