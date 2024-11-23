@extends('layouts.main')

@section('content')

<br>
<main class="flex-shrink-0 content">
    <div class="container">
        <section id="detail-pemesanan" class="detail-pemesanan py-5">
            <div class="container">
                <h4 class="text-uppercase text-center mb-4">Informasi Pemesanan</h4>

                <div class="row align-items-stretch">
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table table-bordered light-font">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ $pemesanan->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $pemesanan->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>No HP</th>
                                        <td>{{ $pemesanan->nohp }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td>{{ $pemesanan->nama_kategori }}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td>Rp. {{ number_format($pemesanan->harga, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Event</th>
                                        <td>{{ $pemesanan->tanggal_event }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Event</th>
                                        <td>{{ $pemesanan->alamat_event }}</td>
                                    </tr>
                                    <tr>
                                        <th>DP 50%</th>
                                        <td>Rp. {{ number_format($pemesanan->harga * 0.5, 0, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <a href="javascript:history.back()" class="btn btn-secondary mr-2">Kembali</a>
                    </div>

                    <div class="col-md-6">
                        <div class="image-container" style="height: 100%;">
                            @if($pemesanan->bukti_pembayaran)
                                <div class="text-center" style="height: 100%;">
                                    <img src="{{ Storage::url($pemesanan->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="img-fluid rounded shadow" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @else
                                <p class="text-muted">Belum ada bukti pembayaran yang diupload.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
</main>

<br>

@endsection

<style>
    .image-container {
        height: auto; /* Ensure this matches the height of the table */
        min-height: 400px; /* Set a minimum height that matches or exceeds the table's height */
    }
</style>
