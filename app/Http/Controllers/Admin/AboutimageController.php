<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutimageController extends Controller
{
    //
    public function index()
    {
        $about = AboutModel::first();
        return view('admin.aboutimg.index', compact('about'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $about = AboutModel::first();

        if (!$about) {
            $about = new AboutModel();
        }

        if ($request->hasFile('profile')) {
            $imageName = time() . '.' . $request->profile->extension();
            $request->profile->move(public_path('about'), $imageName);
            $about->profile = $imageName;
        }

        $about->save();

        return redirect()->back()->with('success','Abouts Saved Successfully');
    }
}
