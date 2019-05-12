<?php

namespace app\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
	public function postlogin(request $request){
		if (auth::attempt($request->only('username_ukm','password'))){
			return redirect('/home');
		}
		return redirect ('/login');
	}

}