
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <meta charset="utf-8">
  <title>GoJabarUKM</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('ukm/img/logo2.png')}}" rel="icon">
  <link href="{{asset('ukm/img/logo2.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('Main/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('Main/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('Main/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('Main/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Main/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('Main/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Favicon  -->
    <link rel="icon" href="{{asset('Main/img/logo2.png')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('Main/essence-style.css')}}">

  <!-- Main Stylesheet File -->
  <link href="{{asset('Main/css/style.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('Main/img/logo2.png')}}" type="image/png">
    <title>Masuk | GoJabarUKM</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Main/vendors/linericon/style.css')}}">
    <link href="{{asset('Main/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Main/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Main/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('Main/vendors/nice-select/css/nice-select.css')}}">
    <link href="{{asset('Main/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Main/vendors/jquery-ui/jquery-ui.css')}}">
    <link href="{{asset('Main/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Main/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('Main/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('Main/css/stylelog.css')}}">
    <link rel="stylesheet" href="{{asset('Main/css/responsive.css')}}">
    <link href="{{asset('Main/css/style.css')}}" rel="stylesheet">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <a href="#intro" class="scrollto"><img src="{{asset('Main/img/logo2.png')}}" alt="" class="img-fluid"></a>
      </div>
        
        <nav class="main-nav float-right d-none d-lg-block">
        <ul>
            @if(Auth::check())
          <li><a href="#portfolio">Galeri UKM</a></li>
          <li><a href="{{ route('logout') }} "onclick="event.preventDefault();
          document.getElementById('logout-form').submit(); " class="btn-get-started scrollto"> Keluar</a>
          <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
            @csrf
          </form>
          </li>
          <li class="drop-down" id="sign-up-option"><a href="#sign-up-option">Daftar</a>
            <ul>
              <li><a href="#">Daftar Sebagai Tamu</a></li>
              <li><a href="{{ route('register') }}">Daftar Sebagai Pemilik UKM</a></li>
            </ul>
          </li>
            @else
       <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="#portfolio">Galeri UKM</a></li>
          <li class="drop-down" id="log-in-option"><a href="#sign-up-option">Masuk</a>
            <ul>
              <li><a href="{{route('login.form')}}">Masuk Sebagai Tamu</a></li>
              <li><a href="{{ route('login') }}">Masuk Sebagai Pemilik UKM</a></li>
            </ul>
          </li>
          <li class="drop-down" id="sign-up-option"><a href="#sign-up-option">Daftar</a>
            <ul>
              <li><a href="{{route('register.form')}}">Daftar Sebagai Tamu</a></li>
              <li><a href="{{ route('register') }}">Daftar Sebagai Pemilik UKM</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>GoJabarUKM</h3>
            <p>Situs penyedia informasi terkait Usaha Kecil Menengah di Jawa Barat.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><a href="#about">Tentang Kami</a></li>
              <li><a href="#sign-up-option">Registrasi Akun</a></li>
              <li><a href="#">Kebijakan Privasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              <strong>Phone:</strong> +62 8892 1661 04<br>
              <strong>Email:</strong> infoUKM@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Layanan Kami</h4>
            <p>Untuk mendapatkan informasi terbaru mengenai Usaha Kecil Menengah di Jawa Barat, Anda dapat berlangganan dengan kami.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Langganan">
            </form>
          </div>

        </div>
      </div>
    </div>

  </footer>
    <!--================ End footer Area  =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('Main/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Main/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('Main/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Main/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('Main/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset('Main/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('Main/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('Main/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('Main/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('Main/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('Main/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('Main/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('Main/js/main.js')}}"></script>

  <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('Main/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('Main/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('Main/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('Main/js/plugins.js')}}"></script>
    
    <!-- Active js -->
    <script src="{{asset('Main/js/active.js')}}"></script>

</body>
</html>
