<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use Illuminate\Support\Facades\Session as FacadesSession;


class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
         FacadesSession::put('page','settings');
        return view('settings.index')->with('settings',Settings::first());
    }

    public function update(Request $request){
        $settings = Settings::first();

        $settings->firebasekey = $request->input('firebasekey');
        $settings->privacypolicy = $request->input(strip_tags('privacypolicy'));
        $settings->onesignal = $request->input('onesignal');

        $settings->email = $request->input('email');
        $settings->version = $request->input('version');
        
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
       
        
    }
}
