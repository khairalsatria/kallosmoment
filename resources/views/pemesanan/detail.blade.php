@extends('layouts.main')

@section('content')

    <br>

    <main class="flex-shrink-0 content">
        <div class="container">
            <section id="detail-pemesanan" class="detail-pemesanan py-5">
                <div class="container">
                    <h4 class="text-uppercase text-center mb-4">Detail Pemesanan</h4>
                    {{-- <p class="text-center mb-5">Berikut adalah detail pemesanan Anda.</p> --}}

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

                            <h5 class="mt-4 light-font text-center">Informasi Rekening</h5>
                            <p>
                                Silakan lakukan pembayaran ke <strong>Bank ABC</strong> atas nama <strong>Kallos Moment</strong>, nomor rekening <strong>123-456-7890</strong>, cabang <strong>Jakarta</strong>. Simpan bukti transfer Anda untuk referensi. Terima kasih atas kepercayaan Anda!
                            </p>
                            <div class="mt-3">
                                <form action="{{ route('pemesanan.uploadBukti', $pemesanan->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label form="bukti_pembayaran" class="light-font text-center">Upload Bukti Pembayaran:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">></span>
                                            </div>
                                            <input type="file" name="bukti_pembayaran" class="form-control" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mr-2">Upload Bukti Pembayaran</button>
                                    <a href="javascript:history.back()" class="btn btn-secondary mr-2">Kembali</a>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="image-container">
                                <img src="/image/gallery/gallery6.jpg" alt="Description of image" class="img-fluid rounded" style="height: 100%; width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
    </main>
</br>
@endsection
