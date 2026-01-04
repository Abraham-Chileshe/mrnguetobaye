<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Admin Dashboard</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style-liberty.css') }}">
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap" rel="stylesheet">
  <!-- /web fonts -->
    <style>
        .site-header { margin-bottom: 2rem; border-bottom: 1px solid rgba(0,0,0,0.1); }
        .hero-header-11-content { padding-top: 10px; padding-bottom: 10px; }
        .nav-tabs .nav-link { color: #555; font-weight: 500; }
        .nav-tabs .nav-link.active { color: var(--primary-color); border-color: #dee2e6 #dee2e6 #fff; }
        .tab-content { padding: 20px; border: 1px solid #dee2e6; border-top: none; background: #fff; border-radius: 0 0 5px 5px; }
    </style>
</head>

<body class="bg-light">

  @include('partials.admin-navbar')

  @yield('content')

  <!-- jQuery and Bootstrap JS -->
  <script src="{{ asset('assets/js/jquery-3.4.1.slim.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/dark-mode.js') }}"></script>

</body>

</html>
