<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//password
Route::get('/change-password','Auth\ChangePasswordController@index');
Route::post('/password-update','Auth\ChangePasswordController@changePassword')->name('password.update');

// Settings Routes
Route::get('settings','SettingsController@index');
Route::post('settings/update','SettingsController@update');

// AdsSettings Routes
Route::get('ads','AdsController@index');
Route::post('ads/update','AdsController@update');



//Notification Route
Route::get('notifications','NotificationContoller@index');
Route::post('notifications/send','NotificationContoller@send');

//subscription
Route::get('subscription','SubscriptionController@index');
Route::get('subscription/create', 'SubscriptionController@create');
    Route::post('subscription/submit', 'SubscriptionController@store');
    Route::get('subscription/edit/{id}', 'SubscriptionController@edit');
    Route::post('subscription/update/{id}', 'SubscriptionController@update');
    Route::get('subscription/update-status/{id}',  'SubscriptionController@updateStatus');
    Route::get('subscription/delete/{id}',  'SubscriptionController@destroy');

//videos
Route::get('video','VideoController@index');
Route::post('video/store','VideoController@store');
Route::post('video/updateVideo/{id}','VideoController@updateVideo');
Route::get('video/delete/{id}',  'VideoController@destroy');

//feedback
Route::get('feedback','FeedbackController@index');