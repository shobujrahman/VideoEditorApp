<?php

namespace App\Http\Controllers\Api;

use App\FeedBack;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request){

        $feedback = new FeedBack();
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->save();

        if(!$feedback){
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong',
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Feedback Added Successfully',
            'data' => $feedback
        ]);
    
}
}
