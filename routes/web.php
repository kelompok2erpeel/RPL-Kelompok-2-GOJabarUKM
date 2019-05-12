<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/tamu','GuestController@index');
// Route::get('/tamu/registertamu','GuestController@tambah');
// Route::post('/tamu/store','GuestController@store');
// Route::get('/tamu/edit/{username}','GuestController@edit');
// Route::post('/tamu/update','GuestController@update');
// Route::get('/gtamu/hapus/{username}','GuestController@hapus');

// Route::get('/pemilik_ukm','PemilikukmController@indexpemilik');
// Route::get('/pemilik_ukm/tambah','PemilikukmController@tambahpemilik');
// Route::post('/pemilik_ukm/store','PemilikukmController@storepemilik');
// Route::get('/pemilik_ukm/edit/{IDukm}','PemilikukmController@editpemilik');
// Route::post('/pemilik_ukm/update','PemilikukmController@updatepemilik');
// Route::get('/pemilik_ukm/hapus/{IDukm}','PemilikukmController@hapuspemilik');
Auth::routes();


Route::get('/editukm/{username_ukm}','UkmController@editukm');
Route::get('/edittamu/{username}','TamuController@edittamu');


Route::get('/barang','BarangController@input')->name('barang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('registertamu', 'RegistertamuController@form')->name('register.form');
Route::post('/registertamu/simpan','RegistertamuController@simpan')->name('register.simpan');

Route::get('logintamu', 'LogintamuController@form')->name('login.form');
Route::post('attempt', 'LogintamuController@attempt')->name('login.attempt');

Route::get('/hometamu', 'HometamuController@index')->name('hometamu');

Route::post('/postlogin','AuthController@postlogin')->name('postlogin');