<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

class AdsController extends Controller
{
    public function index(){
        // $ad = Settings::first([
        // 'admobPublisherId',
        // 'admobAppId',
        // 'admob_inter',
        // 'admob_native',
        // 'admob_banner',
        // 'admob_reward',
        // 'fbPublisherId',
        // 'fb_app_id',
        // 'fb_inter',
        // 'fb_native',
        // 'fb_banner',
        // 'fb_reward',
        // 'unity_appId_gameId',
        // 'iron_source_appKey',
        // 'appnext_placementId',
        // 'startapp_appId',
        // 'interstitial_interval',
        // 'native_ads_interval',
        // 'ad_type'
        // ]);


        $ad = Settings::select('admobPublisherId',
		        'admobAppId',
		        'admob_inter',
		        'admob_native',
		        'admob_banner',
		        'admob_reward',
		        'open_app_add',
		        'fbPublisherId',
		        'fb_app_id',
		        'fb_inter',
		        'fb_native',
		        'fb_banner',
		        'fb_reward',
		        // 'unity_appId_gameId',
		        // 'iron_source_appKey',
		        // 'appnext_placementId',
		        // 'startapp_appId',
		        // 'interstitial_interval',
		        // 'native_ads_interval',
		        'ad_type',
		        'reward_duration',
                )->where('id', 1)->get();

        if(!$ad){

        	return response()->json([
	            'status' => 1,
	            'data' => "no data"
        	]);

        }else{
        	return response()->json([
	            'status' => 2,
	            'data' => $ad
        	]);
        }
        
    } 
}
