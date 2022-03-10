<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    public function index(){
        $settings = Settings::first([
            'firebasekey',
            'email',
            'version',
            'privacypolicy',
            'onesignal'
        ]);
        return response()->json([
            'success' => true,
            'data' => $settings
        ]);
    }   
}
