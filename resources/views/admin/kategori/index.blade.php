@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Kategori</h4>
                        <p class="card-description">
                            Tabel Kategori Paket Wedding Photography Kallos Moment
                        </p>
                        @can('admin')
                        <div class="d-flex justify-content-end mb-3">
                            <button onclick="window.print('cetakpdf/kategori');" class="btn btn-info btn-sm"><i class="mdi mdi-download"></i> Cetak</button>
                            <a href="{{ route('admin-kategori.create') }}" class="btn btn-primary btn-sm ml-2"><i class="mdi mdi-plus-circle"></i> Tambah Data</a>
                        </div>
                        @endcan
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th data-order="kode_kategori">Kode Kategori</th>
                                        <th>Nama Kategori</th>
                                        <th>Harga</th>
                                        <th>Gambar</th> <!-- New column for images -->
                                        @can('admin')
                                        <th>Aksi</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kategoris as $kategori)
                                    <tr>
                                        <td>{{ $kategoris->firstItem() + $loop->index }}</td>
                                        <td>{{ $kategori->kode_kategori }}</td>
                                        <td>{{ $kategori->nama_kategori }}</td>
                                        <td>Rp{{ number_format($kategori->harga, 0, ',', '.') }},00</td>
                                        <td>
                                            @if($kategori->gambar_kategori)
                                                <a href="{{ asset('storage/' . $kategori->gambar_kategori) }}" target="_blank" class="btn btn-dark btn-sm "><i class="mdi mdi-image"></i>

                                                </a>
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        @can('admin')
                                        <td class="text-nowrap">
                                            <a href="/admin-kategori/{{ $kategori->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="mdi mdi-eye"></i></a>
                                            <a href="/admin-kategori/{{ $kategori->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="mdi mdi-grease-pencil"></i></a>
                                            <form action="/admin-kategori/{{ $kategori->id }}" title="Hapus Data" method="post" class="d-inline">
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
                        {{ $kategoris->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
