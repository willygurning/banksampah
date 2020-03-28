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
    return view('user.template.default');
});
Route::get('/coba', function () {
    return view('user.template.coba');
});

Route::get('/tukar', function () {
    return view('user.template.tukar');
});

Route::get('/antar', function () {
    return view('user.template.antar');
});

Route::get('/home', function () {
    return view('user.template.home');
});

Route::get('/tukar/elektronik', function () {
    return view('user.template.elektronik');
});

Route::get('/tukar/nonorganik', function () {
    return view('user.template.nonorganik');
});

Route::get('/tukar/pakaian', function () {
    return view('user.template.pakaian');
});

Route::get('/tukar/elektronikcoba', function () {
    return view('user.template.elektronikcoba');
});
Route::get('/tukar/elektronikkomputer', function () {
    return view('user.template.elektronikkomputer');
});
Route::get('/tukar/elektronikhp', function () {
    return view('user.template.elektronikhp');
});
Route::get('/tukar/elektronikrumahtangga', function () {
    return view('user.template.elektronikrumahtangga');
});
