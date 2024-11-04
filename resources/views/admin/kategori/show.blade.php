@extends('admin.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Kategori</h4>
                        <p class="card-description">
                            Menampilkan detail kategori paket wedding photography Kallos Moment
                        </p>
                        {{-- <div class="mb-4">
                            <a href="{{ route('admin-kategori.index') }}" class="btn btn-primary">Kembali ke Daftar Kategori</a>
                        </div> --}}
                        <div class="d-flex justify-content-end mt-4 mb-3">
                            <a href="/admin-kategori/{{ $kategori->id }}/edit" class="btn btn-warning mr-2">
                                <i class="mdi mdi-grease-pencil"></i>
                            </a>
                            <form action="/admin-kategori/{{ $kategori->id }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger mr-2" onclick="return confirm('Yakin akan menghapus data ini?')">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin-kategori.index') }}" class="btn btn-primary">
                                <i class="mdi mdi-exit-to-app"></i>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Kode Kategori</th>
                                        <td>{{ $kategori->kode_kategori }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <td>{{ $kategori->nama_kategori }}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>Rp{{ number_format($kategori->harga, 0, ',', '.') }},00</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>{{ $kategori->deskripsi ?? 'Tidak ada deskripsi' }}</td> <!-- Assuming there's a description field -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



