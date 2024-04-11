<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('APP_NAME')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Landing Page/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Landing Page/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('Landing Page/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Landing Page/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('Landing Page/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Landing Page/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Landing Page/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Landing Page/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Landing Page/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Rapid
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('Navigasi.navbar landing page')

@yield('content')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Landing Page/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('Landing Page/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('Landing Page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Landing Page/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Landing Page/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('Landing Page/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('Landing Page/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Landing Page/assets/js/main.js') }}"></script>

</body>

</html>