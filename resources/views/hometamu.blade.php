<!DOCTYPE html>
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
  <link href="{{asset('Main/img/logo2.png')}}" rel="icon">
  <link href="{{asset('Main/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

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

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('Main/css/core-style.css')}}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <!-- Main Stylesheet File -->
  <link href="{{asset('Main/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <a href="#intro" class="scrollto"><img src="{{asset('Main/img/logo2.png')}}" alt="" class="img-fluid"></a>
      </div>

       <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/home">Beranda</a></li>
          <li><a href="" class="btn-get-started scrollto">Favorit</a></li>
         <li class="drop-down"><a href=""><i class="fa fa-user" style="font-size:20px"></i></a>
            <ul>
              <li><a href='{{url("/edittamu/{$t->username}")}}'>Pengaturan Profil</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Keluar</a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
            @csrf
          </form>
              </li>
            </ul>
         </li>
        </ul>
      </nav><!-- .main-nav -->
    
    </div>
  </header><!-- #header -->
  <!--==========================
    Intro Section
  ============================-->
  <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <br><br>
                  </header>
        <center> <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
        </div> </center>
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Kuliner</li>
              <li data-filter=".filter-card">Elektronik</li>
              <li data-filter=".filter-web">Fashion</li>
              <li data-filter=".filter-other">Serba-Serbi</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/web3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/app2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/card2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/web2.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/app3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/card1.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{asset('Main/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="{{asset('Main/img/portfolio/card3.jpg')}}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

    </section><!-- #portfolio -->

  <main id="main">

    <!--==========================
      UKM Populer section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Temukan UKM terpopuler disini</h3><br>
          <br>

        </header>

        <div class="row about-container">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('Main/img/makanan.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('Main/img/makanan.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Knot Front Mini Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('Main/img/bapak.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('Main/img/bapak.jpg')}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>topshop</span>
                                <a href="single-product-details.html">
                                    <h6>Poplin Displaced Wrap Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('Main/img/keranjang.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('Main/img/keranjang.jpg')}}" alt="">

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Crepe Wrap Mini Dress</h6>
                                </a>
                                <p class="product-price">$55.00</p>

                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('Main/img/sumatera.jpg')}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('Main/img/sumatera.jpg')}}" alt="">

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ##### New Arrivals Area End ##### -->

    <!--==========================
      Memulai
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Bergabung dengan Kami</h3>
          <p>Sebagai pemilik UKM, ada beberapa hal yang perlu Anda lakukan untuk dapat bergabung dengan kami.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-personadd" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Mendaftar Akun</a></h4>
              <p class="description">Sebelum mulai mengatur bagaimana profil UKM Anda ditampilkan, Anda harus memiliki akun khusus untuk Pemilik UKM.</p>
            </div>
          </div>
           <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dokumen Validasi</a></h4>
              <p class="description">Untuk semakin meyakinkan pelanggan bahwa UKM Anda legal, Anda perlu mengunggah dokumen-dokumen tertentu melalui menu pengaturan profil Anda.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-settings" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Mengatur Profil UKM</a></h4>
              <p class="description">Untuk menarik perhatian pelanggan agar mengunjungi profil Anda, Anda perlu mengaturnya dengan mengunggah produk yang Anda jual dengan semenarik mungkin.</p>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- #memulai -->

    <!--==========================
      Dokumen Validasi
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Dokumen Validasi</h3>
          <p>Dokumen yang harus Anda unggah untuk validasi akun.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-address-card"></i>
              <div class="card-body">
                <h5 class="card-title">Nomor Pokok Wajib Pajak</h5>
                <p class="card-text">Nomor yang diberikan kepada Wajib Pajak sebagai identitas Wajib Pajak dalam melaksanakan hak dan memenuhi kewajiban perpajakannya.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-briefcase"></i>
              <div class="card-body">
                <h5 class="card-title">Surat Izin Usaha Perdagangan</h5>
                <p class="card-text">Dokumen yang diperlukan dan diwajibkan bagi orang perseorangan maupun badan usaha yang akan mendirikan usaha perdagangan.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-thumb-tack"></i>
              <div class="card-body">
                <h5 class="card-title">Surat Izin Gangguan (HO)</h5>
                <p class="card-text">Surat keterangan yang menyatakan tidak adanya keberatan dan gangguan atas lokasi usaha yang dijalankan oleh suatu kegiatan usaha di suatu tempat. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-address-card"></i>
              <div class="card-body">
                <h5 class="card-title">Tanda Daftar Perusahaan</h5>
                <p class="card-text">Bukti bahwa suatu perusahaan atau badan usaha telah melakukan kewajibannya melakukan pendaftaran perusahaan dalam Daftar Perusahaan</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

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
