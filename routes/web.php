<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Gurucontroller;
use App\Http\Controllers\Siswacontroller;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RuanganController;

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
Route::resource('posts', PostController::class);
Route::resource('guru', Gurucontroller::class);
Route::resource('siswa', Siswacontroller::class);
Route::resource('kelas', KelasController::class);
Route::resource('ruangan', RuanganController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
