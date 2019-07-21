
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
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::middleware(['guest:staff'])->group(function () {
	Route::get('staff/login', 'Auth\StaffAuthController@showLoginPage');
	Route::post('staff/login', 'Auth\StaffAuthController@login');
	Route::get('staff/check', 'Auth\StaffAuthController@check');
	Route::get('staff/logout', 'Auth\StaffAuthController@logout');
});

Route::middleware(['guest:mahasiswa'])->group(function () {
	Route::get('mahasiswa/login', 'Auth\MahasiswaAuthController@showLoginPage');
	Route::get('mahasiswa/register', 'Auth\MahasiswaAuthController@showRegisterPage');
	Route::post('mahasiswa/register', 'Auth\MahasiswaAuthController@register');
	Route::post('mahasiswa/login', 'Auth\MahasiswaAuthController@login');
	Route::get('mahasiswa/check', 'Auth\MahasiswaAuthController@check');
	Route::get('mahasiswa/logout', 'Auth\MahasiswaAuthController@logout');
});

Route::middleware(['admin'])->group(function () {
	Route::get('/admin/dashboard', function() {
		return view('admin.dashboard');
	});
	Route::get('/admin/mahasiswa', 'UserMahasiswaController@index');
	Route::get('/admin/surat', 'AdminSuratController@index');
	Route::get('/admin/surat/penelitian', 'AdminSuratPenelitianController@index');
	Route::get('/admin/surat/penelitian/{id}', 'AdminSuratPenelitianController@single');
	Route::get('/admin/surat/penelitian/{id}/edit', 'AdminSuratPenelitianController@edit');
	Route::put('/admin/surat/penelitian/{id}', 'AdminSuratPenelitianController@update');
	Route::get('/admin/surat/penelitian/{id}/pdf', 'AdminSuratPenelitianController@generatePDF');
});

Route::middleware(['mahasiswa'])->group(function () {
	Route::get('/surat', 'SuratController@index');
	Route::get('/surat/penelitian', 'SuratPenelitianController@create');
	Route::post('/surat/penelitian', 'SuratPenelitianController@store');
});

Route::middleware(['operator'])->group(function () {
	Route::get('/operator/surat', 'OperatorSuratController@index');
	Route::get('/operator/surat/{id}/edit','OperatorSuratController@edit');
	Route::put('/operator/surat/{id}','OperatorSuratController@update');
});

// Route::get('/admin/mahasiswa', 'UserMahasiswaController@index');111
// Route::get('/logout', 'StaffLoginController@logout');

// Route::get('/check', 'StaffLoginController@check');

Route::get('/logout', function () {
	 Auth::guard('staff')->logout();
	 Auth::guard('mahasiswa')->logout();
	 return redirect('/');
});

Route::get('/', function () {
    	return view('welcome');
	});