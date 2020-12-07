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

// Route::get('/', function () {
//     return view('pendaftaran');
// });

Route::get('/', 'pendaftaranController@show');

Route::get('/admin', function () {
    return view('auth.login1');
});

// Route::get('/surat', function () {
//     return view('kopsurat.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Pendaftaran
Route::post('/pendaftaran/input', 'pendaftaranController@store');
Route::get('/proses_pendaftaran', 'prosespendaftaranController@index');
Route::get('/data_tamu', 'ApiController@index');
Route::get('/getdatawawancara/{id}', 'prosespendaftaranController@getdatawawancara')->name('get.data.wawancara');
Route::get('/getdatariwayatobat/{id}', 'prosespendaftaranController@getdatariwayatobat')->name('get.data.riwayatobat');
Route::get('/getdatahasiltesurin/{id}', 'prosespendaftaranController@getdatahasiltesurin')->name('get.data.hasiltesurin');
Route::get('/getdatapengurus/{id}', 'prosespendaftaranController@getdatapengurus')->name('get.data.pengurus');
Route::get('/getdatapendaftar/{id}', 'prosespendaftaranController@getdatapendaftar')->name('get.data.pendaftar');
Route::post('/wawancara/update', 'prosespendaftaranController@update_w');
Route::post('/riwayatobat/update', 'prosespendaftaranController@update_r');
Route::post('/hasiltesurin/update', 'prosespendaftaranController@update_h');
Route::post('/pengurus/update', 'prosespendaftaranController@update_p');
Route::get('/daftar/hapus/{id}', 'prosespendaftaranController@destroy');
Route::post('/email/update', 'prosespendaftaranController@sendemail');

// Data Pasien
Route::get('/data_pasien', 'DatapasienController@index');
Route::post('/input/pasien', 'DatapasienController@store');
Route::get('/getdatapasien/{id}', 'DatapasienController@getdatapasien')->name('get.data.pasien');
Route::post('/datapasien/update', 'DatapasienController@update');
Route::get('/pasien/hapus/{id}', 'DatapasienController@destroy');

// Kop Surat
Route::get('/surat/{id}', 'prosespendaftaranController@show');
Route::get('/surat/exportPdf/{id}', 'prosespendaftaranController@exportPdf');

// Data Pegawai
Route::get('/data_pegawai', 'PegawaiController@index');
Route::post('/input/pegawai', 'PegawaiController@store');
Route::get('/getdatapegawai/{id}', 'PegawaiController@getdatapegawai')->name('get.data.pegawai');
Route::post('/datapegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@destroy' );

// Riwayat Pasien   
Route::get('/riwayat_pasien', 'RiwayatpasienController@index');
Route::get('/getriwayatpasien/{id}', 'RiwayatpasienController@getriwayatpasien')->name('get.data.riwayat.pasien');
Route::post('/riwayatpasien/update', 'RiwayatpasienController@update');
Route::post('/riwayatpasien/tambah', 'RiwayatpasienController@store');
Route::get('/riwayatpasien/hapus/{id}', 'RiwayatpasienController@destroy');

//download
Route::get('/view/{id}', 'RiwayatpasienController@view');

//API
Route::get('/api', 'ApiController@index');