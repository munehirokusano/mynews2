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

// 公開ページ
Route::get('/', 'Release\TopPageController@index')->name('topPage');

Route::group(['prefix' => 'contact'], function () {
    Route::get('input', 'Release\ContactController@input')->name('input');
    Route::post('check', 'Release\ContactController@check');
    Route::post('create', 'Release\ContactController@create');
    Route::get('complete', 'Release\ContactController@complete');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('index', 'Release\NewsController@index')->name('newsIndex');
    Route::get('articles/{id}', 'Release\NewsController@articles');
});

Route::group(['prefix' => 'information'], function () {
    Route::get('index', 'Release\InformationController@index')->name('informationIndex');
    Route::get('articles/{id}', 'Release\InformationController@articles');
});

// 閲覧制限 開発者: system-only=9, 管理者: admin-higher=5, 一般ユーザー: user-higher=0 
Route::group(['prefix' => 'asukasupouthukanrigamen', 'middleware' => ['auth', 'can:admin-higher']], function () {

    Route::get('/', 'Admin\TopPageController@index')->name('admin.index');

    Route::get('user/create', 'Admin\UserController@add');
    Route::get('user', 'Admin\UserController@index')->name('admin.user');
    Route::post('user/delete', 'Admin\UserController@delete');
    Route::post('user/roleup', 'Admin\UserController@roleup');

    Route::get('contact/create', 'Admin\ContactController@add');
    Route::get('contact', 'Admin\ContactController@index')->name('admin.contact');
    Route::post('contact/delete', 'Admin\ContactController@delete');

    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('news/delete', 'Admin\NewsController@delete');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::get('news', 'Admin\NewsController@index')->name('admin.news');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::post('news/edit', 'Admin\NewsController@update');

    Route::get('information/create', 'Admin\InformationController@add');
    Route::get('information/delete', 'Admin\InformationController@delete');
    Route::get('information/edit', 'Admin\InformationController@edit');
    Route::get('information', 'Admin\InformationController@index')->name('admin.information');
    Route::post('information/create', 'Admin\InformationController@create');
    Route::post('information/edit', 'Admin\InformationController@update');

    Route::get('course/create', 'Admin\CourseController@add');
    Route::get('course/delete', 'Admin\CourseController@delete');
    Route::get('course/edit', 'Admin\CourseController@edit');
    Route::get('course', 'Admin\CourseController@index')->name('admin.course');
    Route::post('course/create', 'Admin\CourseController@create');
    Route::post('course/edit', 'Admin\CourseController@update');
});

// 閲覧制限の解除用
// Route::group(['prefix' => 'admin'], function () {

// 認証関係

// 認証の初期状態
// Auth::routes();
 
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
 
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
 

// 管理者以上でユーザー登録可能
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
});

// 未使用のルート
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'Release\ProfileController@index');
Route::get('/blogPage/{headline_id}', 'Release\NewsController@blogPage');

Route::group(['prefix' => 'asukasupouthukanrigamen', 'middleware' => 'auth'], function () {
    
    
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/delete', 'Admin\ProfileController@delete');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::get('profile', 'Admin\ProfileController@index')->name('admin.profile');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::post('profile/edit', 'Admin\ProfileController@update');

    Route::get('pictureTitle/create', 'Admin\PictureTitleController@add');
    Route::get('pictureTitle', 'Admin\PictureTitleController@index')->name('admin.pictureTitle');
    Route::get('pictureTitle/edit', 'Admin\PictureTitleController@edit');
    Route::get('pictureTitle/delete', 'Admin\PictureTitleController@delete');
    Route::post('pictureTitle/create', 'Admin\PictureTitleController@create');
    Route::post('pictureTitle/edit', 'Admin\PictureTitleController@update');
});
