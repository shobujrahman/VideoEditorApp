<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    public function index()
    {
        Session::put('page', 'videos');
        $videos = Video::all();
        return view('videos.index', compact('videos'))->with('no', 1);
    }
    public function store(Request $request){
        //validationrules


        $video = new Video();
        $video->title = $request->title;
     
        //image
        if($request->hasFile('thumb_image')){
            $imageName = time().'.'.$request->thumb_image->extension();  
            $request->thumb_image->move(public_path('images/'), $imageName);
            $video->thumb_image = $imageName;
        }
        

        $video->video_url = $request->video_url;
        $video->description = $request->description;
        $video->video_duration = $request->video_duration;
        $video->save();
        return redirect()->back()->with('message', 'Video Added Successfully');
    }

    //update
    public function updateVideo($id, Request $request){
        $video = Video::find($id);
        
        //thumbnail
        if ($request->thumb_image) {
            if(file_exists(public_path('images/'.$video->thumb_image))){
                unlink(public_path('images/'.$video->thumb_image));
              }

            $imageName = time().'.'.$request->thumb_image->extension();  
            $request->thumb_image->move(public_path('images/'), $imageName);
            $video->thumb_image = $imageName;
            // $video->update();
        }
        $video->title = $request->title;
        $video->video_url = $request->video_url;
        $video->description = $request->description;
        $video->video_duration = $request->video_duration;
        $video->update();
        return redirect()->back()->with('message', 'Video Updated Successfully');

    }

    public function destroy($id){
        $video = Video::find($id);
        if(file_exists(public_path('images/'.$video->thumb_image))){
            unlink(public_path('images/'.$video->thumb_image));
          }
        $video->delete();
        return redirect()->back()->with('message', 'Video Deleted Successfully');
    }
}

