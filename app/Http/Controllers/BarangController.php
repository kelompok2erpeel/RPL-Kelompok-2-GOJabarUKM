<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use user;

class BarangController extends Controller
{
	public function input()
		{
			return view('barang');
		}
}