<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = GalleryModel::get();
        return view('admin.gallery.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagepath = $request->file('image')->store('gallery','public');
        GalleryModel::create([
            "title" => $request->title,
            "image" => $imagepath
        ]);
        return redirect()->route('gallery.index');
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
        $gallery = GalleryModel::findOrFail($id);
        return view('admin.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = GalleryModel::findOrFail($id);
    
        if($request->hasFile('image')){
            if($gallery->image && file_exists(public_path('storage/'.$gallery->image))){
                unlink(public_path('storage/'.$gallery->image));
            }
            $imagepath = $request->file('image')->store('gallery','public');
            $gallery->image = $imagepath;
        }
        $gallery->title = $request->input('title');
        $gallery->save();
        return redirect()->route('gallery.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
