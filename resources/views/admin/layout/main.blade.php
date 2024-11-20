<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kallos Moments</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject --><link rel="shortcut icon" href="../../image/white-kallos.png" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
        font-family: 'Roboto', sans-serif; /* Ganti font untuk seluruh body */
    }

    .table {
        border-collapse: collapse; /* Menghindari jarak antara border */
        width: 100%; /* Memastikan tabel mengambil seluruh lebar */
    }

    .table th, .table td {
        padding: 12px; /* Menambahkan padding untuk sel */
        text-align: left; /* Menyusun teks ke kiri */
        border-bottom: 1px solid #ddd; /* Menambahkan garis bawah pada sel */
    }

    /* .table th {
        background-color: #f8f9fa; /* Warna latar belakang header */
        font-weight: 500; /* Mengubah ketebalan font header */
    } */



    .badge {
        font-size: 0.9rem; /* Ukuran font badge */
        padding: 0.5em 0.75em; /* Padding dalam badge */
        border-radius: 0.25rem; /* Membuat sudut badge melengkung */
    }
</style>

</head>
<body>


    @include('admin.layout.navbar')

    @include('admin.layout.sidebar')

    {{--

    @include('dashboard.layouts.sidebar') --}}

    <!-- Begin page content -->

    @yield('content')

    @include('admin.layout.footer')

    <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/data-table.js"></script>
  <script src="../../js/jquery.dataTables.js"></script>
  <script src="../../js/dataTables.bootstrap4.js"></script>
  <script>
    function addFormat(input) {
        let value = input.value.replace(/[^0-9]/g, ''); // Menghapus karakter non-numeric
        if (value) {
            input.value = 'Rp' + new Intl.NumberFormat('id-ID', { style: 'decimal', minimumFractionDigits: 2 }).format(value);
        } else {
            input.value = '';
        }
    }

    function removeFormat(input) {
        let value = input.value.replace(/[Rp. ]/g, ''); // Menghapus 'Rp', '.' dan spasi
        input.value = value;
    }
</script>

  </body>

  </html>
