<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Customer;
use App\Language;
use App\Report;
use App\Settings;
use App\Slide;
use App\Status;
use App\Support;
use App\Version;
use App\Subscription;
use App\Notification;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        FacadesSession::put('page','dashboard');

        
         $settingsCount = Settings::count();

	$subscriptionCount = Subscription::count();
       
	$notificationCount = Notification::count();
        
        return view('home', compact(
            'settingsCount',
'subscriptionCount',
'notificationCount'
        ));
    }
}
