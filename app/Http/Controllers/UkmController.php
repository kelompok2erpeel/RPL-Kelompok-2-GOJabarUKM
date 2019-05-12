<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\User;
use app\auth;

class UkmController extends Controller
{
	public function editukm($username_ukm)
	{
		
		$users = DB::table('users')->where('username_ukm',$username_ukm)->get();
		
		return view('editukm',['users' => $users]);
 
	}
	
	public function update(Request $request, $id)
	{ $this->validate($request,[
             'nama_ukm' => ['string', 'max:255'],
             'email'=> ['string', 'max:255', 'unique:users'],
             'password'=> [ 'string', 'min:8'],
             'deskripsi_ukm' =>['string', 'max:1000'],
             'no_telepon' => ['string'],
             'IG'=>['string', 'max:100'],
             'facebook'=>['string', 'max:100'],
             'Website'=>['string', 'max:100'],
             'logo'=>['file'],
         ]);

		
		$users = User::find($id);
        $users->nama_ukm = $request->input('nama_ukm');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->deskripsi_ukm = $request->input('deskripsi_ukm');
        $users->no_telepon = $request->input('no_telepon');
        $users->IG = $request->input('IG');
        $users->facebook = $request->input('Facebook');
        $users->Website = $request->input('Website');
        $users->logo = $nama_file;
        $users->save();
				
		return redirect('/editukm/{username_ukm}')->with('sukses', 'Profil Berhasil Diperbarui');;
	}
}