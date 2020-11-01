<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecycleController extends Controller{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('superadmin');
    }

    public function index(){
        return view('admin.recycle.index');
    }

    public function user(){
        return view('admin.recycle.user');
    }

    public function banner(){
        return view('admin.recycle.banner');
    }

    public function contactus(){
        return view('admin.recycle.contact');
    }

    public function partner(){
        return view('admin.recycle.partner');
    }

    public function gallery(){
        return view('admin.recycle.gallery');
    }

    public function gallery_category(){
        return view('admin.recycle.gallery-category');
    }

    public function post(){
        return view('admin.recycle.post');
    }

    public function blog_category(){
        return view('admin.recycle.blog-category');
    }

    public function tag(){
        return view('admin.recycle.tag');
    }
}
