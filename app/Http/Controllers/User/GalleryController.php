<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GalleryModel;
use App\Models\VideoGalleryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
     public function index(){
        $gallerys = GalleryModel::latest()->paginate(9);
        return view('user.gallery.index',compact('gallerys'));
    }
    public function video(){
        $videos = VideoGalleryModel::latest()->paginate(9);
        return view('user.gallery.video',compact('videos'));
    }
}
