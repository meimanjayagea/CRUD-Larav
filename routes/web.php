<?php


use Illuminate\Support\Facades\Route;
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


Route::get('/Registrasi', 'registerController@postRegistrasi')->name('Registrasi');
Route::post('/CreateUser', 'registerController@CreateUser')->name('CreateUser');


Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::get('/postlogin', 'LoginController@postlogin')->name('postlogin');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

Route::get('logout', 'LoginController@logout')->name('logout');

// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

// });

Route::group(['middleware' => ['auth:user,pengguna', 'ceklevel:admin,user,mhs']], function () {
    Route::get('/Beranda', 'BerandaController@index');
    Route::get('/Halaman-satu', 'BerandaController@halamansatu')->name('halamansatu');
    Route::get('/Halaman-dua', 'BerandaController@halamandua')->name('halamandua');
});
