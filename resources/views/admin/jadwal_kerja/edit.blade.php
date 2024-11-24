@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Jadwal Kerja</h4>
                        <form action="{{ route('admin-jadwal_kerja.update', $jadwalKerja->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_klien">Nama Klien</label>
                                <input type="text" class="form-control" id="nama_klien" name="nama_klien" value="{{ old('nama_klien', $jadwalKerja->nama_klien) }}" required>
                                @error('nama_klien')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_kategori">Kategori Paket</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $jadwalKerja->nama_kategori) }}" required>
                                @error('nama_kategori')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_event">Tanggal Event</label>
                                <input type="date" class="form-control" id="tanggal_event" name="tanggal_event" value="{{ old('tanggal_event', $jadwalKerja->tanggal_event) }}" required>
                                @error('tanggal_event')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat_event">Alamat Event</label>
                                <input type="text" class="form-control" id="alamat_event" name="alamat_event" value="{{ old('alamat_event', $jadwalKerja->alamat_event) }}" required>
                                @error('alamat_event')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <textarea class="form-control" id="catatan" name="catatan">{{ old('catatan', $jadwalKerja->catatan) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $jadwalKerja->status) }}" required>
                                @error('status')
                                    <small class=" text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('admin-jadwal_kerja.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
