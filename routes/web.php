<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAlumniController;
use App\Http\Controllers\AdminTracerstudyController;
use App\Http\Controllers\alumniController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\Tracerstudy;

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

Route::get('admin', function () {
    return view('admin.home', [
        'alumni' => Alumni::all(),
        'tracerstudy' => Tracerstudy::all()
    ]);
})->middleware('auth');

Route::get('admin2', function () {
     return view('admin.index', [
         'alumni' => Alumni::all(),
         'tracerstudy' => Tracerstudy::all()
     ]);
})->middleware('auth');

Route::get('home', function () {
    return view('admin.home', [
        'alumni' => Alumni::all(),
        'tracerstudy' => Tracerstudy::all()
    ]);
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/alumni', 'App\Http\Controllers\alumniController@index');
// Route::get('/alumni/tambah', 'App\Http\Controllers\alumniController@tambah');
// Route::post('/alumni/store', 'App\Http\Controllers\alumniController@store');
// Route::get('/alumni/edit/{nim}', 'App\Http\Controllers\alumniController@edit');
// Route::put('/alumni/update/{nim}', 'App\Http\Controllers\alumniController@update');
// Route::get('/alumni/hapus/{id}', 'App\Http\Controllers\alumniController@delete');
// Route::get('/alumni/cari','App\Http\Controllers\alumniController@cari');

Route::resource('admin/alumni', AdminAlumniController::class)->middleware('admin');
Route::resource('admin/tracerstudy', AdminTracerstudyController::class)->middleware('admin');
Route::resource('admin/posts', PostController::class)->middleware('admin')->middleware('admin');
Route::resource('admin/fakultas', FakultasController::class)->middleware('admin');
Route::resource('admin/prodi', ProdiController::class)->middleware('admin');
Route::resource('alumni', AlumniController::class);
Route::resource('admin/pekerjaan', PekerjaanController::class)->middleware('admin');
Route::resource('admin/kuesioner', KuesionerController::class)->middleware('admin');
Route::resource('admin/perusahaan', PerusahaanController::class)->middleware('admin');
Route::get('/admin/posts/checkSlug', [PostController::class, 'checkSlug']);
// Route::get('/admin/fakultas', 'App\Http\Controllers\Controller@index');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/tracerstudy', 'App\Http\Controllers\tracerstudyController@index');
Route::get('/admin/tracerstudy/tambah', 'App\Http\Controllers\tracerstudyController@tambah');
Route::post('/admin/tracerstudy/store', 'App\Http\Controllers\tracerstudyController@store');
Route::get('/admin/tracerstudy/edit/{nim}', 'App\Http\Controllers\tracerstudyController@edit');
Route::put('/admin/tracerstudy/update/{nim}', 'App\Http\Controllers\tracerstudyController@update');
Route::get('/admin/tracerstudy/hapus/{nim}', 'App\Http\Controllers\tracerstudyController@delete');