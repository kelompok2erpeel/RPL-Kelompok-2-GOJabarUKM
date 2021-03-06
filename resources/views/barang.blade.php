<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GoJabarUKM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('ukm/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="{{asset('ukm/css/orionicons.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('ukm/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('ukm/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('Main/img/logo2.png')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="/home" class="navbar-brand font-weight-bold text-uppercase text-base">Pemilik UKM</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="{{asset('ukm/img/avatar-6.jpg')}}" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">Nama UKM</strong><small>Kategori UKM</small></a>
            <div class="dropdown-divider"></div> <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Keluar</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
            @csrf
          </form>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MENU UTAMA</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="/home" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Profil UKM</span></a></li>
        </ul>
      </div>
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Unggah Produk UKM Anda</h3>
                  </div>

                  
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Produk</label>
                          <div class="col-md-9">
                              <input type="file" class="custom-file-input" id="inputGroupFile01"
                              aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                          </div>
                      </div><br>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Barang</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Nama Barang"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Deskripsi</label>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Beri tahu konsumen Anda produk UKM Anda"></textarea>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="submit" class="btn btn-primary">Unggah</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-left text-primary">
              </div>
              <div class="col-md-6 text-center text-md-right text-gray-400">
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('ukm/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('ukm/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('ukm/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ukm/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('ukm/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="{{asset('ukm/js/front.js')}}"></script>
  </body>
</html>