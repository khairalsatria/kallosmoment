@extends('admin.layout.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Data Keuangan</h4>
                        <p class="card-description">
                            Form untuk mengedit data keuangan
                        </p>

                        <form action="{{ route('admin-keuangan.update', $keuangan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $keuangan->tanggal }}" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $keuangan->deskripsi }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $keuangan->kategori }}" required>
                            </div>
                            <div class="form-group">
                                <label for="pendapatan">Pendapatan</label>
                                <input type="number" class="form-control" id="pendapatan" name="pendapatan" value="{{ $keuangan->pendapatan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="pengeluaran">Pengeluaran</label>
                                <input type="number" class="form-control" id="pengeluaran" name="pengeluaran" value="{{ $keuangan->pengeluaran }}" required>
                            </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                            <a href="{{ route('admin-keuangan.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
