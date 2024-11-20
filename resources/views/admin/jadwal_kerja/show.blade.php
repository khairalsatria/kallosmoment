@extends('admin.layout.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Jadwal Kerja</h4>
                        <p class="card-description">
                            Menampilkan detail jadwal kerja event photography Kallos Moment
                        </p>

                        <div class="d-flex justify-content-end mt-4 mb-3">
                            <a href="/admin-jadwal_kerja/{{ $jadwalKerja->id }}/edit" class="btn btn-warning mr-2">
                                <i class="mdi mdi-grease-pencil"></i>
                            </a>
                            <form action="/admin-jadwal_kerja/{{ $jadwalKerja->id }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger mr-2" onclick="return confirm('Yakin akan menghapus data ini?')">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin-jadwal_kerja.index') }}" class="btn btn-secondary">
                                <i class="mdi mdi-exit-to-app"></i>
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Nama Klien</th>
                                        <td>{{ $jadwalKerja->nama_klien }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Paket</th>
                                        <td>{{ $jadwalKerja->nama_kategori }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Event</th>
                                        <td>{{ \Carbon\Carbon::parse($jadwalKerja->tanggal_event)->format('d-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Event</th>
                                        <td>{{ $jadwalKerja->alamat_event }}</td>
                                    </tr>
                                    <tr>
                                        <th>Catatan</th>
                                        <td>{{ $jadwalKerja->catatan ?? 'Tidak ada catatan' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ $jadwalKerja->status }}</td>
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
