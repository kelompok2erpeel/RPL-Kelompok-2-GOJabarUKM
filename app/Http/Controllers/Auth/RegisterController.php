<?php

namespace app\Http\Controllers\Auth;

use app\User;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username_ukm' => ['required', 'string', 'max:255'],
            'nama_ukm' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'no_telepon' => ['required', 'string'], 
            'alamat' => ['required', 'string', 'max:300'],
            'deskripsi_ukm' => ['required', 'string', 'max:1000'],
            

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \app\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username_ukm' => $data['username_ukm'],
            'nama_ukm' => $data['nama_ukm'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'no_telepon' => $data['no_telepon'],
            'alamat' => $data['alamat'],
            'deskripsi_ukm' => $data['deskripsi_ukm'],
            'role' => 'pemilik ukm',

        ]);
    }
}
