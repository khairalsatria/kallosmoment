<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Kallos Moment</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="../../css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="image/white-kallos.png" />
<style>
.card-margin {
            margin-top: 20px; /* Adjust the value as needed */
        }
</style>

      </head>

<body>

<div class="content">
    <div class="container">
        <div class="row align-items-stretch no-gutters">
            <div class="col-md-6 grid-margin stretch-card mt-4">
                <div class="card">
                    <img src="image/gallery/gallery25.jpg" class="card-img-top" alt="Event Image" style="height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card mt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Booking</h4>
                        <form method="post" id="contactForm" name="contactForm" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group mb-1">
                                    <label for="name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Your name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group mb-1">
                                    <label for="nohp" class="col-form-label">No Handphone</label>
                                    <input type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" id="nohp" placeholder="Your phone number" value="{{ old('nohp') }}" required>
                                    @error('nohp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label for="event-date" class="col-form-label">Tanggal Event</label>
                                    <input type="date" class="form-control @error('event-date') is-invalid @enderror" name="event-date" id="event-date" value="{{ old('event-date') }}" required>
                                    @error('event-date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group mb-1">
                                    <label for="package" class="col-form-label">Kategori Paket</label>
                                    <select class="custom-select @error('package') is-invalid @enderror" id="package" name="package" required>
                                        <option selected disabled>Choose...</option>
                                        <option value="Basic Package" {{ old('package') == 'Basic Package' ? 'selected' : '' }}>Basic Package</option>
                                        <option value="Standard Package" {{ old('package') == 'Standard Package' ? 'selected' : '' }}>Standard Package</option>
                                        <option value="Premium Package" {{ old('package') == 'Premium Package' ? 'selected' : '' }}>Premium Package</option>
                                    </select>
                                    @error('package')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mb-1">
                                    <label for="payment-proof" class="col-form-label">Upload Bukti Pembayaran</label>
                                    <input type="file" class="form-control @error('payment-proof') is-invalid @enderror" name="payment-proof" id="payment-proof" accept="image/*" required>
                                    @error('payment-proof')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb5">
                                    <label for="address" class="col-form-label">Alamat</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" cols="30" rows="4" placeholder="Your address" required>{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="/layouts.home" class="btn btn-light">Kembali</a>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>

</body>
</html>
