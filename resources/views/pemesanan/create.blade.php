@extends('pemesanan.layout.main')
@section('content')

        <!-- Navbar -->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Pemesanan</h4>
                        <p class="card-description">
                            Silakan isi form di bawah ini untuk melakukan pemesanan.
                        </p>
                        <div class="row">
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

                                <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data" class="pt-3">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nohp">Nomor HP</label>
                                        <input type="text" class="form-control" name="nohp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori_id" id="kategori" class="form-control form-control-lg" required>
                                            <option value="">Pilih Kategori</option>
                                            @foreach($kategoris as $kategori)
                                                <option value="{{ $kategori->id }}" data-harga="{{ $kategori->harga }}">
                                                    {{ $kategori->nama_kategori }} - Rp. {{ number_format($kategori->harga, 0, ',', '.') }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_event">Tanggal Event</label>
                                        <input type="date" name="tanggal_event" class="form-control form-control-lg" required id="tanggal_event">
                                        @if ($errors->has('tanggal_event'))
                                            <div class="alert alert-danger">{{ $errors->first('tanggal_event') }}</div>
                                        @endif
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const tanggalEventInput = document.getElementById('tanggal_event');
                                            const tanggalTerdaftar = @json($tanggal_event_terdaftar); // Mengambil tanggal yang terdaftar dari PHP ke JavaScript

                                            // Mengatur tanggal yang tidak bisa dipilih
                                            tanggalEventInput.addEventListener('change', function() {
                                                const selectedDate = this.value;
                                                if (tanggalTerdaftar.includes(selectedDate)) {
                                                    alert('Tanggal ini sudah terdaftar, silakan pilih tanggal lain.');
                                                    this.value = ''; // Reset input jika tanggal sudah terdaftar
                                                }
                                            });

                                            // Menonaktifkan tanggal yang sudah ada di input
                                            const today = new Date();
                                            const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
                                            const formattedToday = today.toLocaleDateString('en-CA', options); // Format YYYY-MM-DD

                                            tanggalEventInput.setAttribute('min', formattedToday); // Set minimal tanggal yang bisa dipilih
                                        });
                                    </script>
                                    <div class="form-group">
                                        <label for="alamat_event">Alamat Event</label>
                                        <textarea name="alamat_event" class="form-control form-control-lg" placeholder="Alamat Event" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Pesan</button>
                                    <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                                    <a href="javascript:history.back()" class="btn btn-dark mr-2">Kembali</a>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <img src="/image/gallery/gallery27.jpg" alt="Description of image" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
