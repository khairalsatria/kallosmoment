@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Gallery</h4>
                        <p class="card-description">
                            Tabel Gallery Kallos Moment
                        </p>
                        @can('admin')
                        <div class="d-flex justify-content-end mb-3">
                            {{-- <a href="{{ route('gallery.cetakpdf') }}" class="btn btn-info btn-sm"><i class="mdi mdi-download"></i> Cetak</a> --}}
                            <a href="{{ route('admin-gallery.create') }}" class="btn btn-primary btn-sm ml-2"><i class="mdi mdi-plus-circle"></i> Tambah Data</a>
                        </div>
                        @endcan
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        @can('admin')
                                        <th>Aksi</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gallerys as $gallery)
                                    <tr>
                                        <td>{{ $gallerys->firstItem() + $loop->index }}</td>
                                        <td>
                                            @if($gallery->image_gallery)
                                                <a href="{{ asset('storage/' . $gallery->image_gallery) }}" target="_blank" class="btn btn-dark btn-sm"><i class="mdi mdi-image"></i></a>
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        <td>@if($gallery->text)
                                            {{ $gallery->text }}
                                        @else
                                            Tidak ada deskripsi
                                        @endif
                                        </td>
                                        @can('admin')
                                        <td class="text-nowrap">
                                            <a href="/admin-gallery/{{ $gallery->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="mdi mdi-eye"></i></a>
                                            <a href="/admin-gallery/{{ $gallery->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="mdi mdi-grease-pencil"></i></a>
                                            <form action="/admin-gallery/{{ $gallery->id }}" title="Hapus Data" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="mdi mdi-delete"></i></button>
                                            </form>
                                        </td>
                                        @endcan
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $gallerys->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
