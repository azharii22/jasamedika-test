<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  {{-- <title>Dashboard - NiceAdmin Bootstrap Template</title> --}}
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template')}}/img/favicon.png" rel="icon">
  <link href="{{asset('template')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('template')}}/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('template')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('template')}}/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
 <header id="header" class="header fixed-top d-flex align-items-center">
  @include('layouts.admin.header')
 </header>


<aside id="sidebar" class="sidebar">
  @include('layouts.admin.sidebar')
</aside>


  @show
<main id="main" class="main">
  @yield('content')
</main>


 <footer id="footer" class="footer">
  @include('layouts.admin.footer')
 </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template')}}/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template')}}/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('template')}}/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('template')}}/vendor/quill/quill.min.js"></script>
  <script src="{{asset('template')}}/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('template')}}/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('template')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template')}}/js/main.js"></script>

</body>

</html>
