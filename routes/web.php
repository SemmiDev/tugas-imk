<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store');
Route::get('posts/{post:slug}', 'PostController@show');

Route::get('posts/edit/{post:slug}', 'PostController@edit');
Route::patch('posts/update/{post:slug}', 'PostController@update');

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');
