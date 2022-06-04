<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookanappointment;
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
    return view('index');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('cureu');
});
Route::get('/departments', function () {
    return view('departments');
});
Route::get('/doctors', function () {
    return view('doctors');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact-us', function () {
    return view('contactus');
});
Route::post("departments",[bookanappointment::class, "appointment"]);
