<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;
use Session;

class CommentController extends Controller
{
    public function store(Request $request, $id){
    	$this->validate($request,[
    		'comment' => 'required',
    	]);

      
    	$comment = new Comment();
    	$comment->post_id = $id;
    	$comment->user_id = Auth::id();
        $comment->replay_id = $request->replay;
    	$comment->comment = $request->comment;
        $comment->save();

        Session::flash('success', 'Comment post successful :)');
        return redirect()->back();
    }
}
