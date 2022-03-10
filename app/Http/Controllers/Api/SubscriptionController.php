<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Settings;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function getAll(){
        $subscriptions = Subscription::get();
       
        $ads = Settings::select(['admobPublisherId',
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
            ])->first();

if(!$subscriptions && !$ads){
	return response()->json([
            'status' => 'false',
           'message' =>  'something went wrong'       
        ]);
}

        return response()->json([
            'status' => 'success',
            'subscriptionPurchase' => $subscriptions,
            'ads' => $ads,
        
        ]);
    }
}
