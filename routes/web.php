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
    return view('home');
});
Route::get('about/me','personalBlog@aboutMe')->name('about');
Route::get('sample/post','personalBlog@samplePost')->name('post');
Route::get('contact/me','personalBlog@contactUs')->name('contact');