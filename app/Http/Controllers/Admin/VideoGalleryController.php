<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoGalleryModel;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    //
    public function index()
    {
        $videos = VideoGalleryModel::latest()->get();
        return view('admin.videos.index', compact('videos'));
    }
    public function create()
    {
        return view('admin.videos.create');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'link' => 'required|string|max:255'
        ]);
        VideoGalleryModel::create($validate);
        return redirect()->route('admin.video.index')->with('success', 'Video Add Successfully');
    }
    public function edit($id)
    {
        $video = VideoGalleryModel::find($id);
        return view('admin.videos.edit', compact('video'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'link' => 'nullable|string|max:255'
        ]);

        VideoGalleryModel::where('id', $id)->update([
            'link' => $request->link
        ]);

        return redirect()->route('admin.video.index')
            ->with('success', 'Video Updated Successfully');
    }
    public function destroy($id)
    {
        VideoGalleryModel::where('id', $id)->delete();

        return redirect()->route('admin.video.index')
            ->with('success', 'Video Deleted Successfully');
    }
}
