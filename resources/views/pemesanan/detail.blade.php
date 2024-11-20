@extends('pemesanan.layout.main')
@section('content')


<div class="content-wrapper">
      <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Detail Pemesanan</h4>
                      <p class="card-description">Berikut adalah detail pemesanan Anda.</p>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="table-responsive">
                                  <table class="table table-bordered">
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

                              <h5 class="mt-3">Informasi Rekening</h5>
                              <p><strong>Bank:</strong> Bank ABC</p>
                              <p><strong>Nama Pemilik Rekening:</strong> Kallos Moment</p>
                              <p><strong>Nomor Rekening:</strong> 123-456-7890</p>
                              <p><strong>Cabang:</strong> Jakarta</p>

                              <div class="mt-4">
                                  <h4 class="my-3">Upload Bukti Pembayaran</h4>
                                  <form action="{{ route('pemesanan.uploadBukti', $pemesanan->id) }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group">
                                          <label for="bukti_pembayaran">Upload Bukti Pembayaran:</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                      <i class="mdi mdi-file-upload text-primary"></i>
                                                  </span>
                                              </div>
                                              <input type="file" name="bukti_pembayaran" class="form-control" required>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary mr-2">Upload Bukti Pembayaran</button>
                                    <a href="javascript:history.back()" class="btn btn-dark mr-2">Kembali</a>
                                  </form>
                              </div>
                          </div>

                          <div class="col-md-6">
                              <img src="/image/gallery/gallery26.jpg" alt="Description of image" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
