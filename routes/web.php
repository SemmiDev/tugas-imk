<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

Route::get('posts', 'PostController@index')->name('posts.index');

Route::prefix('posts')->middleware('auth')->group(function () {
    Route::get('create', 'PostController@create')->name('posts.create');
    Route::post('store', 'PostController@store');
    Route::get('{post:slug}/edit', 'PostController@edit');
    Route::patch('{post:slug}/update', 'PostController@update');
    Route::delete('{post:slug}/delete', 'PostController@destroy');
});

// kebawah biar tak menyangka ini adalah slug
Route::get('posts/{post:slug}', 'PostController@show');

Route::get('categories/{category:slug}', 'CategoryController@show');
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
