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

Route::resource('/user', 'UserController');
Route::resource('/blog', 'BlogController');
Route::get('/comfirmemail/{token}', [
    'as' => 'user.confirmemail',
    'uses' => 'UserController@confirmEmail',
]);

Route::resource('/password', 'PasswordController');
Route::get('/findback',[
    'as' => 'password.findback',
    'uses' => 'PasswordController@findBack'
]);
Route::post('/send',[
    'as' => 'password.send',
    'uses' => 'PasswordController@send'
]);

