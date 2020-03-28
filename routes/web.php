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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// FB登入
Route::group(['prefix' => 'user'], function(){
    // 使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        // Facebook登入
        Route::get('/facebook-sign-in', 'Auth\LoginController@facebookSignInProcess')->name('fb_login');
        // Facebook登入重新導向授權資料處理
        Route::get('/facebook-sign-in-callback', 'Auth\LoginController@facebookSignInCallbackProcess');
    });
});
