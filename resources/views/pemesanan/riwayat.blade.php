@extends('layouts.main')

@section('content')

<section id="riwayat-pemesanan" class="riwayat-pemesanan py-5">
    <div class="container">
        <h4 class="text-uppercase text-center light-font">Riwayat Pemesanan Anda</h4>
        <div class="text-center mb-4">
            <a href="{{ route('pemesanan.create') }}" class="btn btn-dark">Buat Pemesanan Baru</a>
        </div>
        <div class="row justify-content-center">
            @if($riwayat->isEmpty())
            <div class="col-md-8 text-center">
                <img src="{{ asset('image/belum-pesan.png') }}"
                     alt="Pemesanan Belum Ada"
                     class="img-fluid mb-4"
                     style="width: 225px; height: auto;">
                <h5 class="text-muted">Pemesanan Anda belum ada.</h5>
            </div>

            @else
                @foreach($riwayat as $index => $pemesanan)
                <div class="col-md-4 mb-4">
                    <article class="post-item card shadow-lg border-light rounded position-relative d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <h5 class="post-title text-uppercase font-weight-bold">
                                <a href="{{ route('pemesanan.info', $pemesanan->id) }}" class="text-dark">{{ $pemesanan->nama }}</a>
                            </h5>
                            <div class="post-meta text-uppercase fs-6 text-secondary mt-3">
                                <p><strong>Package:</strong> {{ $pemesanan->nama_kategori }}</p>
                                <p><strong>Harga:</strong> Rp {{ number_format($pemesanan->harga, 0, ',', '.') }}</p>
                                <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($pemesanan->tanggal_event)->format('d M Y') }}</p>
                                <p><strong>Alamat:</strong> {{ $pemesanan->alamat_event }}</p>
                            </div>
                            <div class="post-status position-absolute top-0 end-0 p-3">
                                <span class="badge bg-{{ $pemesanan->status_pemesanan == 'pending' ? 'danger' : ($pemesanan->status_pemesanan == 'dp lunas' ? 'warning' : 'success') }} px-3 py-2 rounded-pill">
                                    {{ ucfirst($pemesanan->status_pemesanan) }}
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .riwayat-pemesanan .card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
    }

    .riwayat-pemesanan .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .post-meta p {
        margin-bottom: 5px;
    }

    .badge {
        font-size: 0.9rem;
    }
</style>
@endpush
