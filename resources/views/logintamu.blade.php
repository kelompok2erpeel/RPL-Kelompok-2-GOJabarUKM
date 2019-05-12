@extends('layouts.app')
@section('content')
    <!--================Login Box Area =================-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{asset('Main/img/login.jpg')}}" alt="" style="height: 100vh">
                        <div class="hover">
                            <h4>Baru di situs web kami?</h4>
                            <p>Segera daftarkan diri Anda untuk mengetahui lebih banyak</p>
                            <a class="main_btn" href="{{ route('register') }}">Pemilik UKM</a>
                            <a class="main_btn" href="{{route('register.form')}}">Tamu</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner login_box">
                        <h3>Silahkan Masuk</h3>
                        <form class="row login_form" action="{{route('login.attempt')}}" method="post" id="contactForm" novalidate="novalidate">
                            {{csrf_field()}}
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="username_ukm" name="username_ukm" placeholder="Username" style="font-size: 12pt">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" style="font-size: 12pt">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Ingat Saya</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit"  class="btn submit_btn">Masuk</button>
                                <a href="{{ route('password.request') }}">Lupa Kata Sandi?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

