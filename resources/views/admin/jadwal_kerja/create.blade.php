@extends('admin.layout.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Jadwal Kerja</h4>
                        <form action="{{ route('admin-jadwal_kerja.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama_klien">Nama Klien</label>
                                <input type="text" name="nama_klien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_kategori">Kategori Paket</label>
                                <input type="text" name="nama_kategori" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_event">Tanggal Event</label>
                                <input type="date" name="tanggal_event" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat_event">Alamat Event</label>
                                <input type="text" name="alamat_event" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea name="catatan" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('admin-jadwal_kerja.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
