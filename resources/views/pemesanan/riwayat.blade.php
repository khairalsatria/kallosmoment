@extends('pemesanan.layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Riwayat Pemesanan</h4>
                        <p class="card-description">
                            Berikut adalah riwayat pemesanan Anda.
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th> <!-- Kolom Nomor -->
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No HP</th>
                                        <th>Kategori Paket</th>
                                            <th>Harga Paket</th>
                                            <th>DP 30%</th>
                                            <th>Tanggal Event</th>
                                            <th>Alamat Event</th>
                                        <th>Status Pemesanan</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($riwayat as $index => $item) <!-- Menambahkan index untuk nomor -->
                                    <tr>
                                        <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor -->
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->nohp }}</td>
                                        <td>{{ $item->nama_kategori }}</td>
                                        <td>Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                                        <td>Rp. {{ number_format($item->harga * 0.5, 0, ',', '.') }}</td>
                                        <td>{{ $item->tanggal_event }}</td>
                                        <td>{{ $item->alamat_event }}</td>
                                        <td>
                                            <label class="badge badge-{{ $item->status_pemesanan == 'pending' ? 'danger' : ($item->status_pemesanan == 'dp lunas' ? 'warning' : 'success') }}">
                                                {{ ucfirst($item->status_pemesanan) }}
                                            </label>
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal"
                                                data-id="{{ $item->id }}"
                                                data-nama="{{ $item->nama }}"
                                                data-email="{{ $item->email }}"
                                                data-nohp="{{ $item->nohp }}"
                                                data-kategori="{{ $item->nama_kategori }}"
                                                data-harga="{{ number_format($item->harga, 0, ',', '.') }}"
                                                data-dp="{{ number_format($item->harga * 0.5, 0, ',', '.') }}"
                                                data-tanggal="{{ $item->tanggal_event }}"
                                                data-alamat="{{ $item->alamat_event }}">
                                                Lihat Detail
                                            </button>
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

        <!-- Modal -->
        <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail Pemesanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p><strong>Nama:</strong> <span id="modal-nama"></span><td>{{ $item->nama }}</td></p>
                        </div>
                        <div class="form-group">
                            <p><strong>Email:</strong> <span id="modal-email"><td>{{ $item->email }}</span></p>
                        </div>
                        <div class="form-group">
                            <p><strong>No HP:</strong> <span id="modal-nohp"></span><td>{{ $item->nohp }}</td></p>
                        </div>
                        <div class="form-group">
                            <p><strong>Kategori Paket:</strong> <span id="modal-kategori"></span><td>{{ $item->nama_kategori }}</td></p>
                        </div>
                        <div class="form-group">
                            <p><strong>Harga Paket:</strong> <span id="modal-harga"></span><td>Rp. {{ number_format($item->harga, 0, ',', '.') }}</td></td></p>
                        </div>
                        <div class="form-group">
                            <p></p><strong>DP 30%:</strong> <span id="modal-dp"></span><td>Rp. {{ number_format($item->harga * 0.5, 0, ',', '.') }}</td></p>
                        </div>
                        <div class="form-group">
                            <p><strong>Tanggal Event:</strong> <span id="modal-tanggal"></span> <td>{{ $item->tanggal_event }}</td></p>
                        </div>
                        <div class="form-group">
                            <p><strong>Alamat Event:</strong> <span id="modal-alamat"></span> <td>{{ $item->alamat_event }}</td></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $('#detailModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang memicu modal
        var id = button.data('id');
        var nama = button.data('nama');
        var email = button.data('email');
        var nohp = button.data('nohp');
        var kategori = button.data('kategori');
        var harga = button.data('harga');
        var dp = button.data('dp');
        var tanggal = button.data('tanggal');
        var alamat = button.data('alamat');

        // Mengisi data ke dalam modal
        var modal = $(this);
        modal.find('#modal-nama').text(nama);
        modal.find('#modal-email').text(email);
        modal.find('#modal-nohp').text(nohp);
        modal.find('#modal-kategori').text(kategori);
        modal.find('#modal-harga').text(harga);
        modal.find('#modal-dp').text(dp);
        modal.find('#modal-tanggal').text(tanggal);
        modal.find('#modal-alamat').text(alamat);
    });
</script>
@endsection
