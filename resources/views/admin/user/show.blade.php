@extends('admin.layout.main')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Pengguna</h4>
                        <p class="card-description">
                            Menampilkan detail pengguna dengan role Pelanggan
                        </p>
                        <div class="d-flex justify-content-end mt-4 mb-3">
                            <a href="{{ route('admin-user.edit', $user->id) }}" class="btn btn-warning mr-2">
                                <i class="mdi mdi-grease-pencil"></i>
                            </a>
                            <form action="{{ route('admin-user.destroy', $user->id) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger mr-2" onclick="return confirm('Yakin akan menghapus data ini?')">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin-user.index') }}" class="btn btn-secondary">
                                <i class="mdi mdi-exit-to-app"></i>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>No HP</th>
                                        <td>{{ $user->nohp }}</td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td>{{ $user->role }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{ $user->created_at->format('d-m-Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated At</th>
                                        <td>{{ $user->updated_at->format('d-m-Y H:i:s') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
