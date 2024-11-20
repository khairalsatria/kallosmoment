@extends('admin.layout.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Data Keuangan</h4>
                        <p class="card-description">
                            Menampilkan detail data keuangan untuk Kallos Moment
                        </p>

                        <div class="d-flex justify-content-end mt-4 mb-3">
                            <a href="/admin-keuangan/{{ $keuangan->id }}/edit" class="btn btn-warning mr-2">
                                <i class="mdi mdi-grease-pencil"></i>
                            </a>
                            <form action="/admin-keuangan/{{ $keuangan->id }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger mr-2" onclick="return confirm('Yakin akan menghapus data ini?')">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin-keuangan.index') }}" class="btn btn-secondary">
                                <i class="mdi mdi-exit-to-app"></i>
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Tanggal</th>
                                        <td>{{ \Carbon\Carbon::parse($keuangan->tanggal)->format('d-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>{{ $keuangan->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td>{{ $keuangan->kategori }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pendapatan</th>
                                        <td>Rp{{ number_format($keuangan->pendapatan ?? 0, 0, ',', '.') }},00</td>
                                    </tr>
                                    <tr>
                                        <th>Pengeluaran</th>
                                        <td>Rp{{ number_format($keuangan->pengeluaran ?? 0, 0, ',', '.') }},00</td>
                                    </tr>
                                    <tr>
                                        <th>Saldo</th>
                                        <td>Rp{{ number_format(($keuangan->pendapatan ?? 0) - ($keuangan->pengeluaran ?? 0), 0, ',', '.') }},00</td>
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
