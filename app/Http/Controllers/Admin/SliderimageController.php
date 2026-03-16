<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderModel;
use Illuminate\Http\Request;

class SliderimageController extends Controller
{
    //
    public function index()
    {
        $slider = SliderModel::first();
        return view('admin.sliderimg.index', compact('slider'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $slider = SliderModel::first();

        if (!$slider) {
            $slider = new SliderModel();
        }


        if ($request->hasFile('profile')) {
            $imageName = time() . '.' . $request->profile->extension();
            $request->profile->move(public_path('slider'), $imageName);
            $slider->profile = $imageName;
        }

        $slider->save();

        return redirect()->back()->with('success', 'Slider Saved Successfully');
    }
}
