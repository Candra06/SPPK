<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>SPPK</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <script src="https://kit.fontawesome.com/7aa3d8bada.js" crossorigin="anonymous"></script>
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
        <img src="../../assets/img/brand/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../pages/dashboards/dashboard.html">
                <img src="../../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="../../pages/dashboards/dashboard.html" class="nav-link">
              <span class="nav-link-inner--text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../pages/examples/login.html" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../pages/examples/register.html" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
          <!-- Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Smartphone</a>
            <div class="dropdown-menu dropdown-menu dropdown-menu-right py-0 overflow-hidden">
              <!-- List group -->
              <a href="{{url('objek')}}" class="dropdown-item">
                <i class="fas fa-list-ul"></i>
                <span>Index</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="fas fa-plus"></i>
                <span>Create</span>
              </a>
            </div>
          </li>
          <!-- Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kriteria</a>
            <div class="dropdown-menu dropdown-menu dropdown-menu-right py-0 overflow-hidden">
              <!-- List group -->
              <a href="{{url('kriteria')}}" class="dropdown-item">
                <i class="fas fa-list-ul"></i>
                <span>Index</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="fas fa-plus"></i>
                <span>Create</span>
              </a>
            </div>
          </li>
        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/abycndra" target="_blank" data-toggle="tooltip" data-original-title="Follow Abiyu on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/ravlynanda" target="_blank" data-toggle="tooltip" data-original-title="Follow Ravly on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/fido.firdaus" target="_blank" data-toggle="tooltip" data-original-title="Follow Fido on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
              <i class="fab fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block ml-lg-4">
            <a href="https://www.creative-tim.com/product/argon-dashboard-pro" target="_blank" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon">
                <i class="fas fa-shopping-cart mr-2"></i>
              </span>
              <span class="nav-link-inner--text">Purchase now</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  @yield('content')
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
   <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
   <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
   <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
   <!-- Optional JS -->
   <script src="./assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>
   <!-- Argon JS -->
   <script src="./assets/js/argon.js?v=1.1.0"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="./assets/js/demo.min.js"></script>
 </body>

</html>