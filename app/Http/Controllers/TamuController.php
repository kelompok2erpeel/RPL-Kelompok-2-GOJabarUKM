<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\tamu;
use app\auth;

class TamuController extends Controller
{
	public function edittamu($username)
	{
		
		$tamu = DB::table('tamu')->where('username',$username)->get();
		
		return view('edittamu',['tamu' => $tamu]);
 
	}
	
	public function update(Request $request, $id)
	{ $this->validate($request,[
             'nama' => ['string', 'max:255'],
             'email'=> ['string', 'max:255', 'unique:tamu'],
             'password'=> [ 'string', 'min:8'],
             'no_telepon' => ['string'],
             'foto'=>['file'],
         ]);

		
		$tamu = tamu::find($id);
        $tamu->nama = $request->input('nama');
        $tamu->email = $request->input('email');
        $tamu->password = $request->input('password');
        $tamu->no_telepon = $request->input('no_telepon');
        $tamu->foto = $nama_file;
        $tamu->save();
				
		return redirect('/edittamu/{username}')->with('sukses', 'Profil Berhasil Diperbarui');;
	}
}