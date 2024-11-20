@extends('admin.layout.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Keuangan</h4>
                        <p class="card-description">
                            Form untuk menambahkan data keuangan baru
                        </p>

                        <form action="{{ route('admin-keuangan.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" required>
                            </div>
                            <div class="form-group">
                                <label for="pendapatan">Pendapatan</label>
                                <input type="number" class="form-control" id="pendapatan" name="pendapatan" required>
                            </div>
                            <div class="form-group">
                                <label for="pengeluaran">Pengeluaran</label>
                                <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-keuangan.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
