@extends('layouts.main')

@section('content')


    <br>
    <main class="flex-shrink-0 content">
        <div class="container">
            <section id="booking" class="booking py-5">
            <div class="container">
                <h4 class="text-uppercase text-center mb-4">BOOK YOUR MOMENT</h4>
                <div class="row align-items-stretch">
                    <div class="col-md-6">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data" class="booking-form">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label light-font">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label light-font">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="form-label light-font">Nomor HP</label>
                                <input type="text" class="form-control" name="nohp" value="{{ Auth::user()->nohp ?? '' }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label light-font">Kategori</label>
                                <select name="kategori_id" id="kategori" class="form-select" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}" data-harga="{{ $kategori->harga }}"
                                            {{ request('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama_kategori }} - Rp. {{ number_format($kategori->harga, 0, ',', '.') }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_event" class="form-label light-font">Tanggal Event</label>
                                <input type="date" name="tanggal_event" class="form-control" required id="tanggal_event">
                                @if ($errors->has('tanggal_event'))
                                    <div class="alert alert-danger">{{ $errors->first('tanggal_event') }}</div>
                                @endif
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const tanggalEventTerdaftar = @json($tanggal_event_terdaftar);
                                    const inputTanggalEvent = document.getElementById('tanggal_event');

                                    // Mengubah input date menjadi array dari tanggal yang sudah ada
                                    const tanggalSet = new Set(tanggalEventTerdaftar);

                                    // Menonaktifkan tanggal yang sudah ada
                                    inputTanggalEvent.addEventListener('input', function() {
                                        const selectedDate = this.value;
                                        if (tanggalSet.has(selectedDate)) {
                                            alert('Tanggal ini sudah terdaftar. Silakan pilih tanggal lain.');
                                            this.value = ''; // Mengosongkan input jika tanggal sudah ada
                                        }
                                    });
                                });
                            </script>
                            <div class="mb-3">
                                <label for="alamat_event" class="form-label light-font">Alamat Event</label>
                                <textarea name="alamat_event" class="form-control" placeholder="Alamat Event" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Pesan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a href="javascript:history.back()" class="btn btn-dark">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="/image/gallery/gallery27.jpg" alt="Description of image" class="img-fluid rounded" style="height: 100%; width: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
    </main>

</br>
@endsection
