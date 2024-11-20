<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kallos Mmoments</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../image/white-kallos.png" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<style>
    /* Custom styles */
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Ensure body takes full height */
      font-family: 'Roboto', sans-serif; /* Ganti font untuk seluruh body */
    }

    .content-wrapper {
      flex: 1; /* Allow content to grow and fill available space */
      padding-top: 70px; /* Add padding to prevent overlap with navbar */
      overflow: auto; /* Allow scrolling if content overflows */
    }

    .row {
      flex-grow: 1; /* Allow the row to grow and fill the available space */
    }

    .card {
      flex-grow: 1; /* Allow the card to grow and fill the available space */
      overflow: visible; /* Enable content to overflow without scroll */
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

    .table-responsive {
      overflow: auto; /* Allow scrolling if the table overflows */
    }

    table {
      width: 100%; /* Ensure the table takes full width */
    }

    footer {
      background-color: #f8f9fa; /* Optional: Add background color to footer */
      padding: 10px; /* Add some padding */
      text-align: center; /* Center text in footer */
    }

    /* Media queries for additional responsiveness */
    @media (max-width: 768px) {
      .navbar-brand img {
        height: 30px; /* Smaller logo on mobile */
      }

      .card-title {
        font-size: 1.5rem; /* Adjust title size */
      }

      .table th,
      .table td {
        font-size: 0.9rem; /* Smaller font size for table */
      }
    }

    .navbar-nav .nav-link {
    transition: font-weight 0.3s ease; /* Animasi transisi untuk perubahan font-weight */
}

.navbar-nav .nav-link:hover {
    font-weight: 600; /* Mengubah font menjadi semibold saat hover */
}
</style>
<br>
<body>


    @include('pemesanan.layout.header')


    <!-- Begin page content -->

    @yield('content')

    @include('pemesanan.layout.footer')

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
  <!-- Include Bootstrap JS --><!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
