<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use DB;
use Session;

class SubscriptionController extends Controller
{
    public function index()
    {   
        Session::put('page', 'subscription');
        $subscriptions = Subscription::orderBy('id','desc')->get();
        
        return view('subscription.index', ['subscriptions' => $subscriptions])->with('no',1);
    }

    //store function to store the database
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'durationInMonth' => 'required'
        ]);
        
        $subscription = new Subscription();
        $subscription->name = $request->name;
        $subscription->price = $request->price;
        $subscription->durationInMonth = $request->durationInMonth;
        $subscription->package_type = $request->package_type;
	    $subscription->google_product_id	= $request->google_product_id	;
        $subscription->metadata = $request->metadata;
        $subscription->save();

        if($subscription){
            $notification=array(
                'message'=>'Successfully added',
                'alert-type'=>'success'
            );
            return redirect('/subscription')->with($notification);
        }else{
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    // update function to update the data
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'durationInMonth' => 'required'
        ]);
        
        $subscription = Subscription::find($request->id);

        $subscription->name = $request->name;
        $subscription->price = $request->price;
        $subscription->durationInMonth = $request->durationInMonth;
        $subscription->package_type = $request->package_type;
	    $subscription->google_product_id = $request->google_product_id;
        $subscription->metadata = $request->metadata;
        $subscription->update();

        if($subscription){
            $notification=array(
                'message'=>'Successfully updated',
                'alert-type'=>'success'
            );
            return redirect('/subscription')->with($notification);
        }else{
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }


    public function updateStatus( $id){
        $subscription = DB::table('subscriptions')
        ->select('isBlocked')
        ->where('id', '=', $id)
        ->first();

        //check user Status
        if($subscription->isBlocked=='1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update user status
        $values = array('isBlocked'=>$status);
        DB::table('subscriptions')->where('id',$id)->update($values);
        return redirect('/subscription')->with('message','updated status');
    }


    public function destroy($id){
        // Category::destroy(array('id',$id));
        $data = Subscription::find($id);
        $data->delete();
       if($data){
            $notification=array(
                'message'=>'Successfully deleted',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
