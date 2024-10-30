@extends('admin.main')
@section('content')



      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kategori</h4>
                    <p class="card-description">
                      Daftar Kategori
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($kategoris as $kategori)
                          <tr>
                            <td>{{ $kategoris->firstItem() + $loop->index }}</td>
                            <td>{{ $kategori->kode_kategori }}</td>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td>{{ $kategori->harga }}</td>
                            <td class="text-nowrap">
                              <a href="/dashboard-kategori/{{ $kategori->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
                              <a href="/dashboard-kategori/{{ $kategori->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                              <form action="/dashboard-kategori/{{ $kategori->id }}" title="Hapus Data" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash-fill"></i></button>
                              </form>
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
        </div>






@endsection
