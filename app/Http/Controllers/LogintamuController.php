<?php
namespace app\Http\Controllers;
use app\tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogintamuController extends Controller
{
    public function form()
    {
        return view('logintamu');
    }
    public function attempt(Request $request)
    {
        $data1=tamu::where('username',$request->username)->where('password',$request->password)->get();
        if(count($data1)>0){
       Auth::guard('tamu')->LoginUsingId($data1[0]['id']);
            return redirect('/hometamu');
        }
        else return redirect()->back();
    }
}