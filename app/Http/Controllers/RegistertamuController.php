<?php

namespace app\Http\Controllers;

use app\tamu;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegistertamuController extends Controller
{
    public function form()
    {
        return view('registertamu');
    }
    public function simpan(Request $request)
    {
        // validate request data
        $this->validate($request, [
            'username' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tamu'],
            'password' => ['required', 'string', 'min:8'],
            'no_telepon' => ['required', 'string'],
        ]);
        // save into table
        $tamu = tamu::create([
            'username' => $request->username,
            'nama' =>  $request->nama,
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
            'no_telepon' =>  $request->no_telepon,
            'role' => 'tamu',
        ]);
        // autologin
        // Auth::loginUsingId($tamu->id);
        // redirect to home
        return redirect('/hometamu');
    }
}
