@extends('layouts.app')
@section('content')
    <!--================Login Box Area =================-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                                
                <div class="col-lg-12">
                    <div class="login_form_inner reg_form">
                        <h3>Buat Akun</h3>
                        <form method="POST" action="{{route('register')}}" class="row login_form">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="username_ukm" name="username_ukm" placeholder="Username" required style="font-size: 12pt">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="nama_ukm" name="nama_ukm" placeholder="Nama UKM" required style="font-size: 12pt">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email" required style="font-size: 12pt">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" required style="font-size: 12pt">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="No Telepon" required style="font-size: 12pt">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" required style="font-size: 12pt"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="deskripsi_ukm" name="deskripsi_ukm" placeholder="Deskripsi UKM" required style="font-size: 12pt"></textarea>
                            </div>
                                
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn submit_btn">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->
@endsection