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
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/dawah', function () {
    return view('pages.dawah');
});
Route::get('/welfare', function () {
    return view('pages.welfare');
});
Route::get('/projects', function () {
    return view('pages.projects');
});
Route::get('/education', function () {
    return view('pages.education');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/donate', function () {
    return view('pages.donate');
});
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');