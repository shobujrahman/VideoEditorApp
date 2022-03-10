<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getAllVideos(){
        $videos = Video::get();
        return response()->json([
            'success' => true,
            'data' => $videos
        ]);
    }
}
