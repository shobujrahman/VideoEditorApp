<?php

namespace App\Http\Controllers;

use App\FeedBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
    public function index(){
        Session::put('page','feedback');
        $feedback = FeedBack::all();
        return view('feedback.index', compact('feedback'))->with('no', 1);
    }
}
