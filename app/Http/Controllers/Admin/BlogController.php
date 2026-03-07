<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Index()
    {
        $blogs = BlogModel::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }
    public function Create()
    {
        return view('admin.blogs.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'date' => 'required'
        ]);
        $imagepath = null;
        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('blog', 'public');
        }
        BlogModel::create([
            "title" => $request->title,
            "short_description" => $request->short_description,
            "description" => $request->description,
            "date" => $request->date,
            "image" => $imagepath
        ]);
        return redirect()->route('blog.index')->with('success', 'data inserted successfully ');
    }
    public function show(string $id) {}
    public function edit(string $id)
    {
        $blog = BlogModel::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }
    public function update(Request $request, string $id)
    {
        $blog = BlogModel::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path('storage/' . $blog->image))) {
                unlink(public_path('storage/' . $blog->image));
            }
            $imagepath = $request->file('image')->store('blog', 'public');
            $blog->image = $imagepath;
        }
        $blog->title = $request->input('title');
        $blog->short_description = $request->input('short_description');
        $blog->description = $request->input('description');
        $blog->date = $request->input('date');
        $blog->save();
        return redirect()->route('blog.index');
        }
    public function destroy(string $id) {}
}
