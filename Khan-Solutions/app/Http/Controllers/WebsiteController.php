<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Comment;

class WebsiteController extends Controller{
    public function __construct(){

    }

    public function index(){
        return view('website.home');
    }

    public function about(){
        return view('website.about');
    }

    public function services(){
        return view('website.services');
    }

    public function portfolio(){
        return view('website.portfolio');
    }

    public function contact(){
        return view('website.contact');
    }

    public function blog(){
        return view('website.blog');
    }

    public function post($slug){
        $comments = Comment::where('replay_id', null)->get();
        // return $comments;
        $post = BlogPost::where('post_slug',$slug)->first();
        return view('website.post',compact('post','comments'));
    }
}
