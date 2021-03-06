@extends('layouts.app')
@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="{{asset('Main/img/intro-img.svg')}}" alt="" class="img-fluid">
      </div>


      <div class="intro-info">
        <h2>Pusat Data<br><span>Usaha Kecil Menengah</span><br>di Jawa Barat</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
          <a href="#services" class="btn-services scrollto">Memulai</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tentang Kami</h3><br>
          <p>
              GoJabarUKM adalah situs penyedia informasi Usaha Kecil Menengah yang ada di Jawa Barat.
          </p>

        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <div class="icon-box wow fadeInUp">
            <h3>Sebagai Pemilik UKM</h3>
            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Promosi</a></h4>
              <p class="description">Mempromosikan produk Anda.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Statistik Kunjungan</a></h4>
              <p class="description">Mengetahui statistik jumlah pengunjung profil UKM Anda.</p>
            </div>
            <br>



            <h3>Sebagai Tamu</h3>

             <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
             <div class="icon"><i class="fa fa-search"></i></div>
              <h4 class="title"><a href="">Menemukan UKM yang Anda Cari</a></h4>
              <p class="description">Mendapatkan informasi UKM berdasarkan kategori yang Anda cari.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
             <div class="icon"><i class="fa fa-heart"></i></div>
              <h4 class="title"><a href="">Daftar Kesukaan</a></h4>
              <p class="description">Menambahkan UKM terfavorit Anda ke dalam daftar Kesukaan.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
             <div class="icon"><i class="fa fa-pencil-square-o"></i></div>
              <h4 class="title"><a href="">Ulasan</a></h4>
              <p class="description">Memberikan ulasan untuk UKM yang ada dalam situs kami.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
             <div class="icon"><i class="fa fa-star-half-o"></i></div>
              <h4 class="title"><a href="">Penilaian</a></h4>
              <p class="description">Memberikan penilaian berupa rating untuk UKM yang ada dalam situs kami.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="{{asset('Main/img/about-img.svg')}}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
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
    </section><!-- #services -->

    <!--==========================
      Why Us Section
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

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galeri UKM</h3>
        </header>

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
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
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
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
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
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
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
                  <a href="{{asset('Main/img/portfolio/web1.jpg" class="link-preview')}}" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
@endsection