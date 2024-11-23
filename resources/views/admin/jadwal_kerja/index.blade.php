@extends('admin.layout.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Jadwal Kerja</h4>
                        <p class="card-description">
                            Tabel Jadwal Kerja Event Photography Kallos Moment
                        </p>
                        @can('admin')
                        <div class="d-flex justify-content-end mb-3">
                            <button onclick="window.print('cetakpdf/jadwal_kerja');" class="btn btn-info btn-sm"><i class="mdi mdi-download"></i> Cetak</button>
                            <a href="{{ route('admin-jadwal_kerja.create') }}" class="btn btn-primary btn-sm ml-2"><i class="mdi mdi-plus-circle"></i> Add Data</a>
                        </div>
                        @endcan
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Klien</th>
                                        <th>Kategori Paket</th>
                                        <th>Tanggal Event</th>
                                        <th>Alamat Event</th>
                                        <th>Status</th> <!-- Tambahkan kolom Status -->
                                        @can('admin')
                                        <th>Aksi</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwalKerjas as $index => $jadwalKerja)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $jadwalKerja->nama_klien }}</td>
                                        <td>{{ $jadwalKerja->nama_kategori }}</td>
                                        <td>{{ \Carbon\Carbon::parse($jadwalKerja->tanggal_event)->format('d-m-Y') }}</td>
                                        <td>{{ $jadwalKerja->alamat_event }}</td>
                                        <td>
                                            @php
                                                // Misalkan $jadwalKerja->tanggal adalah tanggal yang ingin dibandingkan
                                                $tanggalSekarang = now(); // Mengambil tanggal dan waktu saat ini
                                                $tanggal_event = \Carbon\Carbon::parse($jadwalKerja->tanggal_event); // Mengonversi tanggal jadwal ke objek Carbon

                                                // Menentukan status
                                                if ($tanggalSekarang > $tanggal_event) {
                                                    $status = 'done';
                                                } else {
                                                    $status = $jadwalKerja->status;
                                                }
                                            @endphp

                                            <label class="badge badge-{{ ($status == 'soon' ? 'warning' : ($status == 'done' ? 'success' : 'primary')) }}">
                                                {{ ucfirst($status) }}
                                            </label>
                                        </td>
                                        @can('admin')
                                        <td class="text-nowrap">
                                            <a href="/admin-jadwal_kerja/{{ $jadwalKerja->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="mdi mdi-eye"></i></a>
                                            <a href="/admin-jadwal_kerja/{{ $jadwalKerja->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="mdi mdi-grease-pencil"></i></a>
                                            <form action="/admin-jadwal_kerja/{{ $jadwalKerja->id }}" title="Hapus Data" method="post" class="d-inline">
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

                       <!-- Menampilkan tanggal terdekat -->
                       @php
                       // Mencari tanggal terdekat
                       $tanggalTerdekat = $jadwalKerjas->pluck('tanggal_event')->filter(function($date) {
                           return \Carbon\Carbon::parse($date) >= now(); // Hanya ambil tanggal yang akan datang
                       })->min();

                       // Mencari alamat event dari tanggal terdekat
                       $alamatEvent = null;
                       if ($tanggalTerdekat) {
                           $jadwalTerdekat = $jadwalKerjas->firstWhere('tanggal_event', $tanggalTerdekat);
                           $alamatEvent = $jadwalTerdekat ? $jadwalTerdekat->alamat_event : null;
                       }
                   @endphp

                   @if($tanggalTerdekat)
                   <div class="d-flex justify-content mt-4">
                       <h5>Next Schedule :
                           @php
                               // Menentukan badge class berdasarkan tanggal terdekat
                               $badgeClass = 'primary'; // Default badge color
                               $tanggal_event = \Carbon\Carbon::parse($tanggalTerdekat);
                               $tanggalSekarang = now();

                               if ($tanggal_event->isToday()) {
                                   $badgeClass = 'danger'; // Jika tanggal terdekat adalah hari ini
                               } elseif ($tanggal_event->isFuture()) {
                                   $badgeClass = 'dark'; // Jika tanggal terdekat adalah di masa depan
                               }
                           @endphp
                           <label class="badge badge-{{ $badgeClass }}">
                               {{ $tanggal_event->format('d-m-Y') }}
                           </label>
                           <label class="badge badge-{{ $badgeClass }}">
                            {{ $alamatEvent }}
                            </label>
                       </h5>
                   </div>
                   @endif
                        {{ $jadwalKerjas->links() }} <!-- Add pagination links if needed -->
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
