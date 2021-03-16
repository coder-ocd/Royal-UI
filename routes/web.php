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
    return view('index');
});

Route::get('/buttons', function () {
    return view('pages.ui-features.buttons');
});

Route::get('/dashboard', function () {
    return view('index');
});


Route::get('/typography', function () {
    return view('pages.ui-features.typography');
});

Route::get('/formelements', function () {
    return view('pages.forms.basic_elements');
});


Route::get('/chartjs', function () {
    return view('pages.charts.chartjs');
});

Route::get('/basictable', function () {
    return view('pages.tables.basic-table');
});

Route::get('/themify', function () {
    return view('pages.icons.themify');
});

Route::get('/login', function () {
    return view('pages.samples.login');
});

Route::get('/login2', function () {
    return view('pages.samples.login-2');
});

Route::get('/login2', function () {
    return view('pages.samples.login-2');
});

Route::get('/register', function () {
    return view('pages.samples.register');
});

Route::get('/register2', function () {
    return view('pages.samples.register-2');
});

Route::get('/lockscreen', function () {
    return view('pages.samples.lock-screen');
});

Route::get('/documentation', function () {
    return view('documentation');
});