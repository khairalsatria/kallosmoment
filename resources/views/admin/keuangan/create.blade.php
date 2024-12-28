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
                                <label for="tanggal_event">Tanggal Event</label>
                                <input type="date" class="form-control" id="tanggal_event" name="tanggal_event" required>
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
                                <input type="number" class="form-control" id="pendapatan" name="pendapatan" min="0" step="0.01">
                            </div>
                            <div class="form-group">
                                <label for="pengeluaran">Pengeluaran</label>
                                <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" min="0" step="0.01">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                            </div>
                            <div class="form-group">
                                <label for="saldo">Saldo</label>
                                <input type="number" class="form-control" id="saldo" name="saldo" min="0" step="0.01">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('admin-keuangan.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
