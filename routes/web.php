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

Route::resource('/user', 'UserController');
Route::resource('/pangkat', 'PangkatController');
Route::resource('/jabatan', 'JabatanController');
Route::resource('/tunjangan', 'TunjanganController');
Route::resource('/anggota', 'AnggotaController');
Route::get('/setting', 'SettingController@index')->name('setting.index');
Route::post('/setting', 'SettingController@store')->name('setting.store');
Route::get('/remun', 'RemunController@selectDate')->name('remun.selectdate');
Route::post('/remun', 'RemunController@selectDatePost');
Route::get('/remun/{tanggal}', 'RemunController@showList')->name('remun.list');
Route::get('/remun/set/{id}/{tanggal}', 'RemunController@setRemun')->name('remun.set');
Route::post('/remun/set', 'RemunController@setRemunPost')->name('remun.set.post');
Route::get('/remun/laporan/date', 'RemunController@getLaporan')->name('remun.laporan');
Route::post('/remun/laporan/print', 'RemunController@getLaporanPrint')->name('remun.laporan.print');
Route::get('/remun/laporan/month', 'RemunController@getLaporanMonth')->name('remun.laporan.month');
Route::post('/remun/laporan/print/month', 'RemunController@getLaporanPrintMonth')->name('remun.laporan.print.month');

Route::group(['prefix' => 'data'], function () {
	Route::get('user', 'UserController@dataUser')->name('data.user');
	Route::get('pangkat', 'PangkatController@dataPangkat')->name('data.pangkat');
	Route::get('jabatan', 'JabatanController@dataJabatan')->name('data.jabatan');
	Route::get('tunjangan', 'TunjanganController@dataTunjangan')->name('data.tunjangan');
	Route::get('anggota', 'AnggotaController@dataAnggota')->name('data.anggota');
});
