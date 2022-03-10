<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    'prefix' => 'v2', 
    'namespace' => 'Api'
], function(){

    // settings
    Route::get('settings','SettingsController@index');
    
    // Ads Settings
    Route::get('ads','AdsController@index');

    //notification 
    Route::post('/store-token','DeviceController@StoreToken'); // device controller

    //subscription
    Route::get('subscription/getAll','SubscriptionController@getAll');
    Route::get('subscription/create', 'SubscriptionController@create');
    Route::post('subscription/submit', 'SubscriptionController@store');
    Route::get('subscription/edit/{id}', 'SubscriptionController@edit');
    Route::post('subscription/update/{id}', 'SubscriptionController@update');
    Route::get('subscription/update-status/{id}',  'SubscriptionController@updateStatus');
    Route::get('subscription/delete/{id}',  'SubscriptionController@destroy');

    //videos
    Route::get('video/getAllVideos','VideoController@getAllVideos');

    //feedback
    Route::post('feedback/store','FeedbackController@store');
});