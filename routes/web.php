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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('news/delete', 'Admin\NewsController@delete');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::get('news', 'Admin\NewsController@index');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::post('news/edit', 'Admin\NewsController@update');
    
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit', 'Admin\ProfileController@update');

    Route::get('contact/create', 'Admin\ContactController@add');
    Route::get('contact', 'Admin\ContactController@index');
    Route::post('contact/delete', 'Admin\ContactController@delete');
    
    Route::get('pictureTitle/create', 'Admin\PictureTitleController@add');
    Route::get('pictureTitle', 'Admin\PictureTitleController@index');
    Route::get('pictureTitle/edit', 'Admin\PictureTitleController@edit');
    Route::get('pictureTitle/delete', 'Admin\PictureTitleController@delete');
    Route::post('pictureTitle/create', 'Admin\PictureTitleController@create');
    Route::post('pictureTitle/edit', 'Admin\PictureTitleController@update');
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('input', 'Release\ContactController@input');
    Route::post('check', 'Release\ContactController@check');
    Route::post('create', 'Release\ContactController@create');
    Route::get('complete', 'Release\ContactController@complete');
});

Route::get('/', 'Release\NewsController@index');
Route::get('/profile', 'Release\ProfileController@index');
Route::get('/blogPage/{headline_id}', 'Release\NewsController@blogPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
