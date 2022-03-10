<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use Session;

class ChangePasswordController extends Controller
{
   public function index(){
       session::put('page','pass');
       return view('auth.passwords.change');
   }

   public function changePassword(Request $request){
        $validatedData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required| min:8 | confirmed'
        ]);
        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->oldpassword, $hashedPassword)){
            $user=User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();   
            $notification=array(
                'message'=>'Successfully language added',
                'alert-type'=>'success'
            );
            return redirect()->route('login')->with($notification);
        }
        else
        {
            $notification=array(
                'message'=>'current password is invalid',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
   }
}
