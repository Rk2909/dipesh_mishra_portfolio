<?php

namespace App\Http\Controllers\User;
use App\Models\AboutModel;
use App\Models\BlogModel;
use App\Models\GalleryModel;
use App\Models\SettingsModel;
use App\Models\SliderModel;
use App\Models\VideoGalleryModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = SettingsModel::first();
        $slider = SliderModel::first();
        $about = AboutModel::first();
        $blogs = BlogModel::latest()->take(3)->get();
        $gallerys = GalleryModel::latest()->take(3)->get();
        $videos = VideoGalleryModel::latest()->take(3)->get();
        return view('user.index' ,compact('setting','slider','about','blogs','gallerys','videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
