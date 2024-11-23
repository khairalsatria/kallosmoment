@extends('layouts.main')

@section('content')

<section id="riwayat-pemesanan" class="riwayat-pemesanan py-5">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">Riwayat Pemesanan Anda</h4>
            <a href="{{ route('pemesanan.create') }}" class="btn-link">Buat Pemesanan Baru</a>
        </div>
        <div class="row">
            @foreach($riwayat as $index => $pemesanan)
            <div class="col-md-4 mb-4">
                <article class="post-item card shadow-sm">
                    <div class="card-body">
                        <h5 class="post-title text-uppercase">
                            <a class="href="{{ route('pemesanan.info', $pemesanan->id) }}">{{ $pemesanan->nama }}</a>
                        </h5>
                        <div class="post-meta text-uppercase fs-6 text-secondary">
                            <span class="post-category">Email   : {{ $pemesanan->email }}</span>
                            <br>
                            <span class="post-category">Kategory: {{ $pemesanan->nama_kategori }}</span>
                            <br>
                            <span class="post-category">Tanggal : {{ $pemesanan->tanggal_event }}</span>
                            <br>
                            <span class="post-category">Alamat  : {{ $pemesanan->alamat_event  }}</span>
                        </div>
                        <div class="post-status my-2">
                            <span class="badge bg-{{ $pemesanan->status_pemesanan == 'pending' ? 'danger' : ($pemesanan->status_pemesanan == 'dp lunas' ? 'warning' : 'success') }}">
                                {{ ucfirst($pemesanan->status_pemesanan) }}
                            </span>
                        </div>
                        <p class="card-text">Detail pemesanan dapat dilihat dengan mengklik nama di atas.</p>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .post-item {
        border: 1px solid #e0e0e0;
        border-radius: 0.5rem;
        overflow: hidden;
        transition: transform 0.2s;
    }
    .post-item:hover {
        transform: scale(1.02);
    }
    .post-title a {
        text-decoration: none;
        color: #333;
    }
    .post-title a:hover {
        color: #007bff; /* Change to your preferred hover color */
    }
    .badge {
        font-size: 0.9rem; /* Slightly smaller badge font */
    }
</style>
@endpush
