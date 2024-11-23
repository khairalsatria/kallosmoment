@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Keuangan</h4>
                        <p class="card-description">
                            Tabel Data Keuangan untuk Kallos Moment
                        </p>
                        @can('admin')
                        <div class="d-flex justify-content-end mb-3">
                            <button onclick="window.print('cetakpdf/keuangan');" class="btn btn-info btn-sm"><i class="mdi mdi-download"></i> Cetak</button>
                            <a href="{{ route('admin-keuangan.create') }}" class="btn btn-primary btn-sm ml-2"><i class="mdi mdi-plus-circle"></i> Tambah Data</a>
                        </div>
                        @endcan
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Pendapatan</th>
                                        <th>Pengeluaran</th>
                                        <th>Saldo</th>
                                        @can('admin')
                                        <th>Aksi</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalPendapatan = 0;
                                        $totalPengeluaran = 0;
                                    @endphp

                                    @foreach($keuangans as $keuangan)
                                    @php
                                        $totalPendapatan += $keuangan->pendapatan ?? 0;
                                        $totalPengeluaran += $keuangan->pengeluaran ?? 0;
                                    @endphp
                                    <tr>
                                        <td>{{ $keuangans->firstItem() + $loop->index }}</td>
                                        <td>{{ $keuangan->deskripsi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($keuangan->tanggal)->format('d-m-Y') }}</td>
                                        <td>{{ $keuangan->kategori }}</td>
                                        <td>Rp{{ number_format($keuangan->pendapatan ?? 0, 0, ',', '.') }},00</td>
                                        <td>Rp{{ number_format($keuangan->pengeluaran ?? 0, 0, ',', '.') }},00</td>
                                        <td>Rp{{ number_format($totalPendapatan - $totalPengeluaran, 0, ',', '.') }},00</td>
                                        @can('admin')
                                        <td class="text-nowrap">
                                            <a href="/admin-keuangan/{{ $keuangan->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="mdi mdi-eye"></i></a>
                                            <a href="/admin-keuangan/{{ $keuangan->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="mdi mdi-grease-pencil"></i></a>
                                            <form action="/admin-keuangan/{{ $keuangan->id }}" title="Hapus Data" method="post" class="d-inline">
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

                        <!-- Menampilkan saldo akhir -->
                        <div class="d-flex justify-content-end mt-4">
                            <h6>Sisa Keuangan:
                                @php
                                    $saldo = $totalPendapatan - $totalPengeluaran;
                                    $badgeClass = 'primary'; // Default badge color

                                    if ($saldo > 0) {
                                        $badgeClass = 'dark'; // Saldo positif
                                    } elseif ($saldo < 0) {
                                        $badgeClass = 'danger'; // Saldo negatif
                                    } else {
                                        $badgeClass = 'secondary'; // Saldo nol
                                    }
                                @endphp
                                <label class="badge badge-{{ $badgeClass }}">
                                    Rp{{ number_format($saldo, 0, ',', '.') }},00
                                </label>
                            </h5>
                        </div>

                        {{ $keuangans->links() }} <!-- Add pagination links if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
