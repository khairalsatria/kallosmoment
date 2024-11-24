@extends('admin.layout.main')
@section('content')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Selamat Datang Kembali,</h2>
                    <p class="mb-md-0">Kelola Semua Momen Berharga Anda di Dashboard Kallos Moment</p>
                  </div>
                  {{-- <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                  </div> --}}
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon mr-2 d-none d-md-block ">
                    <i class="mdi mdi-account-multiple text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-2 mt-2 mt-xl-0">
                    <i class="mdi mdi-camera text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-2 mt-2 mt-xl-0">
                    <i class="mdi mdi-camera-iris text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-2 mt-2 mt-xl-0">
                    <i class="mdi mdi-calendar-multiple text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-2 mt-2 mt-xl-0">
                    <i class="mdi mdi-cash-multiple text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-2 mt-2 mt-xl-0">
                    <i class="mdi mdi-shopping text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-2 mt-2 mt-xl-0">
                    <i class="mdi mdi-logout text-muted"></i>
                  </button>
                  {{-- <button class="btn btn-primary mt-2 mt-xl-0">Download report</button> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">

                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-calendar-clock icon-lg mr-3 text-danger"></i>
                            <div class="d-flex flex-column justify-content-around">
                                <small class="mb-1 text-muted">Next Schedule</small>
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="mb-0 d-inline-block">
                                            {{ $jadwalKerja ? \Carbon\Carbon::parse($jadwalKerja->tanggal_event)->format('d M Y') : 'Tidak ada event terdekat' }}
                                        </h5>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                        @if($jadwalKerja)
                                            <a class="dropdown-item" href="#">{{ $jadwalKerja->alamat_event }}</a>
                                        @else
                                            <a class="dropdown-item" href="#">Tidak ada alamat event</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-calendar-clock mr-3 icon-lg text-danger"></i>
                            <div class="d-flex flex-column justify-content-around">
                                <small class="mb-1 text-muted">Next Schedule</small>
                                    <h5 class="mb-0 d-inline-block">{{ $jadwalKerja ? \Carbon\Carbon::parse($jadwalKerja->tanggal_event)->format('d M Y') : 'No upcoming schedule' }}</h5>
                            </div>
                        </div> --}}
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-cash-multiple mr-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                                <small class="mb-1 text-muted">Keuangan</small>
                                <h5 class="mr-2 mb-0">{{ $totalKeuangan }}</h5>
                            </div>
                        </div>

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-account-multiple mr-3 icon-lg text-info"></i>
                            <div class="d-flex flex-column justify-content-around">
                                <small class="mb-1 text-muted">Pelanggan</small>
                                <h5 class="mr-2 mb-0">{{ $jumlahPelanggan }}</h5>
                            </div>
                        </div>

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-shopping mr-3 icon-lg text-warning"></i>
                            <div class="d-flex flex-column justify-content-around">
                                <small class="mb-1 text-muted">Pemesanan</small>
                                <h5 class="mr-2 mb-0">{{ $jumlahPemesanan }}</h5>
                            </div>
                        </div>

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                            <i class="mdi mdi-camera-iris mr-3 icon-lg text-dark"></i>
                            <div class="d-flex flex-column justify-content-around">
                                <small class="mb-1 text-muted">Kategori</small>
                                <h5 class="mr-2 mb-0">{{ $totalKategori }}</h5>
                            </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Cash deposits</p>
                  <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
                  <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                  <canvas id="cash-deposits-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Total Saldo</p>
                    <h2>Rp{{ number_format($saldo, 0, ',', '.') }}</h2>

                    <p class="text-muted">Pendapatan  :</strong> Rp{{ number_format($totalPendapatan, 0, ',', '.') }} -
                    Pengeluaran :</strong> Rp{{ number_format($totalPengeluaran, 0, ',', '.') }}</p>
                    <p class="text-muted">
                      Data saldo dihitung berdasarkan total pendapatan dan pengeluaran dari seluruh transaksi keuangan. Pastikan data keuangan selalu diperbarui.
                    </p>
                    {{-- <div id="total-sales-chart-legend"></div> --}}
                  </div>
                  <canvas id="total-sales-chart"></canvas>
                </div>
              </div>

          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
@endsection

{{-- <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Total sales</p>
        <h1>$ 28835</h1>
        <h4>Gross sales over the years</h4>
        <p class="text-muted">Today, many people rely on computers to do homework, work, and create or store useful information. Therefore, it is important </p>
        <div id="total-sales-chart-legend"></div>
      </div>
      <canvas id="total-sales-chart"></canvas>
    </div>
  </div> --}}
