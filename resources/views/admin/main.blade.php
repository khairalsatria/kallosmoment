<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css1/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>


      @include('admin.navbar')

    @include('admin.sidebar')

    {{--

    @include('dashboard.layouts.sidebar') --}}

    <!-- Begin page content -->
    
            @yield('content')



    @include('admin.footer')

    <!-- plugins:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js1/off-canvas.js"></script>
    <script src="js1/hoverable-collapse.js"></script>
    <script src="js1/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js1/dashboard.js"></script>
    <script src="js1/data-table.js"></script>
    <script src="js1/jquery.dataTables.js"></script>
    <script src="js1/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->
  </body>

  </html>
