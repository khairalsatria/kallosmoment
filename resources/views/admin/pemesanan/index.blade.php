@extends('admin.layout.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Pemesanan</h4>
                        <p class="card-description">
                            Tabel Pemesanan Wedding Photography Kallos Moment
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th> <!-- Kolom Nomor -->
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Paket</th>
                                        <th>Harga</th>
                                        <th>DP</th>
                                        <th>Tanggal</th>
                                        <th>Alamat</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status Pemesanan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pemesanans as $index => $pemesanan) <!-- Menambahkan $index untuk nomor urut -->
                                        <tr>
                                            <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                                            <td>{{ $pemesanan->nama }}</td>
                                            <td>{{ $pemesanan->email }}</td>
                                            <td>{{ $pemesanan->nohp }}</td>
                                            <td>{{ $pemesanan->nama_kategori }}</td>
                                            <td>Rp. {{ number_format($pemesanan->harga, 0, ',', '.') }}</td>
                                            <td>Rp. {{ number_format($pemesanan->harga * 0.5, 0, ',', '.') }}</td>
                                                                                        <td>{{ $pemesanan->tanggal_event }}</td>
                                            <td>{{ $pemesanan->alamat_event }}</td>
                                            <td>
                                                @if($pemesanan->bukti_pembayaran)
                                                    <a href="{{ asset('storage/' . $pemesanan->bukti_pembayaran) }}" target="_blank">Lihat Bukti</a>
                                                @else
                                                    Belum ada bukti
                                                @endif
                                            </td>
                                            <td>
                                                <label class="badge badge-{{ $pemesanan->status_pemesanan == 'pending' ? 'danger' : ($pemesanan->status_pemesanan == 'dp lunas' ? 'warning' : 'success') }}">
                                                    {{ ucfirst($pemesanan->status_pemesanan) }}
                                                </label>
                                            </td>
                                            <td>
                                                @if($pemesanan->status_pemesanan == 'pending')
                                                    <form action="{{ route('admin.konfirmasi', $pemesanan->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-warning">DP?</button>
                                                    </form>
                                                @elseif($pemesanan->status_pemesanan == 'dp lunas')
                                                    <form action="{{ route('admin.done', $pemesanan->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Done?</button>
                                                    </form>
                                                @endif
                                                <form action="{{ route('admin.hapus', $pemesanan->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
