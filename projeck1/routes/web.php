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
    return view('blade/home');
});

Route::view('/index', 'index',[
    'nama'=> 'key',
    'alamat'=> '<h1>purbalingga</h1>'
]);

Route::get('/admin_user/{nama_user}', function ($nama_user) {
    return view('useradm', ['nama_user' => $nama_user]);
});

Route::view('/guru', 'blade/guru');
Route::view('/siswa', 'blade/siswa');
Route::view('/about', 'blade/about');
Route::view('/kontak', 'blade/kontak');
