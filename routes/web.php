<?php

use App\Http\Controllers\ContactController;
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
    return view('home', [
    "title" => "Home"
    ]);
});

Route::get('/about',function () {
    return view('about', [
    "title" => "About",
    "nama" => "Arina Intan Rizkiana",
    "email" => "3103120033@student.smktelkom-pwt.sch.id",
    "gambar" => "arinaintan.JPEG"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});
Route::resource('/contacts', ContactController::class);