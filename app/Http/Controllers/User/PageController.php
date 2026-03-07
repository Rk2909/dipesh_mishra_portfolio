<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function blog(){
        return view('user.page.blog');
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
