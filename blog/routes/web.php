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
//     return view('welcome');
// });
Route::get('/', function () {
    $title = "Home";
    return view('home', ["title" => $title]);
})->name('home');

Route::get('/admin', function () {
    $title = "Admin";
    return view('admin', ["title" => $title]);
})->name('admin');


// get : untuk menampilkan halaman atau data saja
// post : untuk mengirimkan data
// put : untuk mengubah data
// patch : wajib untuk mengubah semua data
// delete : untuk menghapus data
