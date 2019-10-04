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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');

Auth::routes();

Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');

Auth::routes();

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::get('/kategori_artikel','kategori_artikel_controller@index')->name('kategori_artikel.index');
Route::get('/kategori_berita','kategori_berita_controller@index')->name('kategori_berita.index');
Route::get('/kategori_galeri','kategori_galeri_controller@index')->name('kategori_galeri.index');
Route::get('/kategori_pengumuman','kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
Route::get('/artikel','artikel_controller@index')->name('artikel.index');
Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/galeri','galeri_controller@index')->name('galeri.index');
Route::get('/pengumuman','pengumuman_controller@index')->name('pengumuman.index');

Route::get('/kategori_artikel','kategori_artikel_Controller@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','kategori_artikel_Controller@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','kategori_artikel_Controller@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','kategori_artikel_Controller@show')->name('kategori_artikel.show');\

Route::get('/kategori_berita','kategori_berita_Controller@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','kategori_berita_Controller@create')->name('kategori_berita.create');
Route::post('/kategori_berita','kategori_berita_Controller@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','kategori_berita_Controller@show')->name('kategori_berita.show');\

Route::get('/kategori_galeri','kategori_galeri_Controller@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','kategori_galeri_Controller@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','kategori_galeri_Controller@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','kategori_galeri_Controller@show')->name('kategori_galeri.show');\

Route::get('/kategori_pengumuman','kategori_pengumuman_Controller@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','kategori_pengumuman_Controller@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','kategori_pengumuman_Controller@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','kategori_pengumuman_Controller@show')->name('kategori_pengumuman.show');\

Route::get('/artikel','artikel_Controller@index')->name('artikel.index');
Route::get('/artikel/create','artikel_Controller@create')->name('artikel.create');
Route::post('/artikel','artikel_Controller@store')->name('artikel.store');
Route::get('/artikel/{id}','artikel_Controller@show')->name('artikel.show');\

Route::get('/berita','berita_Controller@index')->name('berita.index');
Route::get('/berita/create','berita_Controller@create')->name('berita.create');
Route::post('/berita','berita_Controller@store')->name('berita.store');
Route::get('/berita/{id}','berita_Controller@show')->name('berita.show');\

Route::get('/galeri','galeri_Controller@index')->name('galeri.index');
Route::get('/galeri/create','galeri_Controller@create')->name('galeri.create');
Route::post('/galeri','galeri_Controller@store')->name('galeri.store');
Route::get('/galeri/{id}','galeri_Controller@show')->name('galeri.show');\

Route::get('/pengumuman','pengumuman_Controller@index')->name('pengumuman.index');
Route::get('/pengumuman/create','pengumuman_Controller@create')->name('pengumuman.create');
Route::post('/pengumuman','pengumuman_Controller@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','pengumuman_Controller@show')->name('pengumuman.show');