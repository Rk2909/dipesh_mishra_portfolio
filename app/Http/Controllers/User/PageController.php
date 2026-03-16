<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function blog(){
        $blogs = BlogModel::latest()->paginate(9);
        return view('user.page.blog',compact('blogs'));
    }
    public function blogDetails(){
        return view('user.page.blogDetails');
    }
    public function element(){
        return view('user.page.gallery');
    }
    public function portfolioDetails(){
        return view('user.page.portfolioDetails');
    }
}
