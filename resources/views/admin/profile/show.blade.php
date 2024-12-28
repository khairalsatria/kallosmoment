@extends('admin.layout.main')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body text-center">
                        <h4 class="card-title">Profil Anda</h4>
                        <div class="mb-4">
                            {{-- <img src="{{ asset('path/to/default-avatar.png') }}" alt="Avatar" class="rounded-circle border border-primary" width="120"> --}}
                            <h5 class="mt-3">{{ $user->name }}</h5>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope fa-lg"></i> Email:</label>
                            <p class="text-muted">{{ $user->email }}</p>
                        </div>

                        <div class="form-group">
                            <label for="nohp"><i class="fas fa-phone fa-lg"></i> No HP:</label>
                            <p class="text-muted">{{ $user->nohp }}</p>
                        </div>

                        {{-- <div class="form-group">
                            <label for="created_at"><i class="fas fa-calendar-alt fa-lg"></i> Member Sejak:</label>
                            <p class="text-muted">{{ $user->created_at->format('d M Y') }}</p>
                        </div> --}}

                        <div class="text-center mt-4">
                            <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary">Edit Profil</a>
                            {{-- <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
