@extends('layouts.main')

@section('content')



<section id="profile" class="profile py-5">
    <div class="container">
        <h4 class="text-uppercase text-center mb-4 light-font">Profil Anda</h4>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-header text-center bg-primary text-white">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <img src="{{ asset('path/to/default-avatar.png') }}" alt="Avatar" class="rounded-circle" width="120">
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-envelope fa-lg"></i>
                            <strong>Email:</strong> {{ $user->email }}
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone fa-lg"></i>
                            <strong>No HP:</strong> {{ $user->nohp }}
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-calendar-alt fa-lg"></i>
                            <strong>Member Sejak:</strong> {{ $user->created_at->format('d M Y') }}
                        </div>
                        <!-- Tambahkan informasi lain yang relevan -->
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('profile.edit') }}" class="btn btn-secondary  border border-primary">Edit Profil</a>
                        <a href="{{ route('logout') }}" class="btn btn-dark">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
