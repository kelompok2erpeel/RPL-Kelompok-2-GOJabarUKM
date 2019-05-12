<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GuestController extends Controller
{
    public function index()
    {
    	$guest=DB::table('guest')->get();
    	return view('index',['guest'=>$guest]);

    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
	
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('guest')->insert([
			'username' => $request->username,
			'nama' => $request->nama,
			'email' => $request->email,
			'password' => $request->password,
			'no_telepon' => $request->no_telepon,
			'foto' => $request->foto
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/signup');
 
	}

	// method untuk edit data pegawai
	public function edit($username)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$guest = DB::table('guest')->where('username',$username)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['guest' => $guest]);
 
	}
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('guest')->where('username',$request->username)->update([
			'nama' => $request->nama,
			'email' => $request->email,
			'password' => $request->password,
			'no_telepon' => $request->no_telepon,
			'foto' => $request->foto
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/guest');
	}
	// method untuk hapus data pegawai
	public function hapus($username)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('guest')->where('username',$username)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/guest');
}
}
