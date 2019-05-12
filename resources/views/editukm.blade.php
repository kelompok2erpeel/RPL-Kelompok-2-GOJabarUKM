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
      @foreach($users as $u)
      {{ csrf_field() }}
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a><a href="/home" class="navbar-brand font-weight-bold text-uppercase text-base">{{ $u->nama_ukm }}</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="{{asset('ukm/img/avatar-6.jpg')}}" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family">{{ $u->nama_ukm }}</strong><small>Kategori UKM</small></a>
              <div class="dropdown-divider"></div> <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Keluar</a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
            @csrf
          </form>
            </div>
          </li>
        </ul>
      </nav>
      @endforeach
    </header>
    </header>
    <div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MENU UTAMA</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="homepageukm.html" class="sidebar-link text-muted active"><i class="o-home-1 mr-3 text-gray"></i><span>Profil UKM</span></a></li>
        </ul>
      </div>
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <!-- Basic Form-->
              <!-- Horizontal Form-->
              <!-- Inline Form-->
             
              <div class="col-lg-8 mb-5">                           
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Validasi  Profil  UKM</h3>
                  </div>
                  @foreach($users as $u)
                  {{ csrf_field() }}
                  <div class="card-body">
                      <div class="keterangan">
                          <p><strong>Nomor Pokok Wajib Pajak</strong></p>
                      </div>
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">NPWP</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                              aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                          </div>
                      </div>
                      
                      <br>
                      <div class="keterangan">
                          <p><strong>Surat Izin Usaha Perdagangan</strong></p>
                      </div>
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">SIUP</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                              aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                          </div>
                      </div>
                      <br>
                      <div class="keterangan">
                          <p><strong>Surat Izin Gangguan</strong></p>
                      </div>
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">SIG</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                              aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                          </div>
                      </div>
                      <br>
                      <div class="keterangan">
                          <p><strong>Tanda Daftar Perusahaan</strong></p>
                      </div>
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">TDP</span>                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                              aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                          </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              
              <!-- Modal Form-->
              <div class="col-lg-4 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">AKUN</h3>
                  </div>
                  <div class="card-body">
                    @foreach($users as $u)
                          <form>
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label class="form-control-label text-uppercase">Email</label>
                              <input type="email" placeholder="Email Address" class="form-control" value="{{ $u->email }}">
                            </div>
                            <div class="form-group">       
                              <label class="form-control-label text-uppercase">Kata Sandi</label>
                              <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">       
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                          @endforeach
                    <!-- Modal-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 id="exampleModalLabel" class="modal-title">Signin Modal</h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                           
                            <form>
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Email Address" class="form-control">
                              </div>
                              <div class="form-group">       
                                <label>Password</label>
                                <input type="password" placeholder="Password" class="form-control">
                              </div>
                              <div class="form-group">       
                                <input type="submit" value="Signin" class="btn btn-primary">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Form Elements -->
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Informasi UKM</h3>
                  </div>
                  <div class="card-body">
                    @foreach($users as $u)
                    <form class="form-horizontal" method="POST" action="{{route('Ukm.update',$users->id)}}">
                      {{ csrf_field() }}
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Deskripsi</label>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Masukkan deskripsi UKM Anda" >{{ $u->deskripsi_ukm }}</textarea><small class="form-text text-muted ml-3"></small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomor Ponsel</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" placeholder="Masukkan nomor ponsel UKM Anda" value="{{ $u->no_telepon }}"><small class="form-text text-muted ml-3"></small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Alamat</label>
                        <div class="col-md-9">
                          <textarea class="form-control" placeholder="Masukkan alamat UKM Anda" >{{ $u->alamat }}</textarea><small class="form-text text-muted ml-3"></small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Instagram</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="{{ $u->IG }}"><small class="form-text text-muted ml-3"></small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Facebook</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="{{ $u->Facebook }}"><small class="form-text text-muted ml-3"></small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Website</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" value="{{ $u->Website }}"><small class="form-text text-muted ml-3"></small>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Batal</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </form>
                    @endforeach
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