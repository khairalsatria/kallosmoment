@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Pilih Paket Fotografi Anda</h1>

    <!-- Menampilkan Pesan Sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('packages.submit') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="package" class="form-label">Paket Fotografi</label>
            @foreach($packages as $package)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="package_id" id="package{{ $package->id }}" value="{{ $package->id }}" {{ old('package_id') == $package->id ? 'checked' : '' }}>
                    <label class="form-check-label" for="package{{ $package->id }}">
                        <strong>{{ $package->name }}</strong> - Rp{{ number_format($package->price, 0, ',', '.') }}
                        <br>
                        {{ $package->description }}
                    </label>
                </div>
            @endforeach
            @error('package_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Formulir Tambahan (Nama, Email, dll.) -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Tambahkan bidang lain sesuai kebutuhan -->

        <button type="submit" class="btn btn-primary">Pilih Paket</button>
    </form>
@endsection
