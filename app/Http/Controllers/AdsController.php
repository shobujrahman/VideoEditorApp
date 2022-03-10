<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('ads.index')->with('settings',Settings::first());
    }

    public function update(Request $request){
        $validationRules = [
            'reward_duration' => 'integer',
        ];
        $validator = \Validator::make(
            $request->all(),
            $validationRules
        );
        if ($validator->fails()) {
            // return response()->json([
            //     'status' => 'failure',
            //     'message' => $validator->errors()->first(),
            // ]);
            $notification=array(
                'status' => 'failure',
                'message' => $validator->errors()->first(),
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }

        $settings = Settings::first();

        $settings->admobPublisherId = $request->input('admobPublisherId');
        $settings->admobAppId = $request->input('admobAppId');
        $settings->admob_inter = $request->input('admob_inter');
        $settings->admob_native = $request->input('admob_native');
        $settings->admob_banner = $request->input('admob_banner');
        $settings->admob_reward = $request->input('admob_reward');
        $settings->open_app_add = $request->input('open_app_add');
        //fbsettings
        $settings->fbPublisherId = $request->input('fbPublisherId');
        $settings->fb_app_id = $request->input('fb_app_id');
        $settings->fb_inter = $request->input('fb_inter');
        $settings->fb_native = $request->input('fb_native');
        $settings->fb_banner = $request->input('fb_banner');
        $settings->fb_reward = $request->input('fb_reward');


        $settings->reward_duration = $request->input('reward_duration');
        $settings->ad_type = $request->input('ad_type');

        //unity
        // $settings->unity_appId_gameId = $request->input('unity_appId_gameId');
        //ironsource
        // $settings->iron_source_appKey = $request->input('iron_source_appKey');
        //appnext
        // $settings->appnext_placementId = $request->input('appnext_placementId');
        //startapp
        // $settings->startapp_appId = $request->input('startapp_appId');
        //interstitial
        // $settings->interstitial_interval = $request->input('interstitial_interval');
        //nativeAds
        // $settings->native_ads_interval = $request->input('native_ads_interval');
        
        
        
        $settings->update();

        if($settings)
        {
            $notification=array(
                'message'=>'Successfully updated',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }
        else
        {
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
       
        // return redirect()->back()->with('message', 'Settings Updated!');
    }
}
