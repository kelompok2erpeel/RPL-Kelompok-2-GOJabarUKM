

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('Main/img/favicon.png')}}" type="image/png">
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
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="{{asset('Main/img/logo2.png')}}" alt="" class="img-fluid"></a>
      </div>

       <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="#portfolio">Galeri UKM</a></li>
          <li><a href="{{ route('login') }}" class="btn-get-started scrollto">Masuk</a></li>
          <li class="drop-down" id="sign-up-option"><a href="#sign-up-option">Daftar</a>
            <ul>
              <li><a href="#">Daftar Sebagai Tamu</a></li>
              <li><a href="#">Daftar Sebagai Pemilik UKM</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
    <!--================Header Menu Area =================-->

    <!--================Login Box Area =================-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{asset('Main/img/login.jpg')}}" alt="">
                        <div class="hover">
                            <h4>Setel Ulang Kata Sandi</h4>
                            <p>
             Masukkan alamat email Anda dan kami akan mengirimkan tautan setel ulang kata sandi khusus ke kotak masuk Anda.
            </p>
    
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <br><br><br><br><br>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Email Anda">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn submit_btn">Kirim</button>
                
                                <a href="#">Tidak menerima tautan? Kirim ulang tautan</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->



    <!--================ start footer Area  =================-->
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

</body>
</html>
