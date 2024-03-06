<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/booking', function () {
    return view('booking');
});Route::get('/contact', function () {
    return view('contact');
});Route::get('/about', function () {
    return view('about');
});Route::get('/room', function () {
    return view('room');
});Route::get('/service', function () {
    return view('service');
});Route::get('/team', function () {
    return view('team');
});Route::get('/testimonial', function () {
    return view('testimonial');
});
