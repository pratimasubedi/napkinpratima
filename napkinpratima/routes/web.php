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

Route::get('/', function () {
    return view('home.home');
});

Route::get('test', function () {
    return view('test');
});
Route::get('header', function () {
    return view('header.header');
});
Route::get('footer', function () {
    return view('footer.footer');
});
Route::get('home', function () {
    return view('home.home');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('ourproduct', function () {
    return view('ourproduct');
});
Route::get('ourservices', function () {
    return view('ourservices');
});
Route::get('ourteam', function () {
    return view('ourteam');
});
Route::get('gallery', function () {
    return view('gallery');
});
Route::get('gallery-dynamic', function () {
    return view('gallery-dynamic');
});
Route::get('video', function () {
    return view('video');
});




