<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SettingsModel;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = SettingsModel::first();
        return view('admin.settings.create', compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $setting = SettingsModel::first();

        if (!$setting) {
            $setting = new SettingsModel();
        }

        $setting->logo = $request->logo;
        $setting->email = $request->email;
        $setting->contact = $request->contact;
        $setting->address = $request->address;
        $setting->twitter = $request->twitter;
        $setting->facebook = $request->facebook;
        $setting->website = $request->website;
        $setting->instagram = $request->instagram;
        $setting->youtube = $request->youtube;

        $setting->save();
        return redirect()->back()->with('success', 'Data Save successfully');
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
