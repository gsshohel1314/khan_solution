<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use Carbon\Carbon;
use Session;

class ProcessController extends Controller{
    public function __construct(){

    }

    public function index(){

    }

    public function contact(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'message'=>'required',
        ],[
            'name.required'=>'Please enter your name!',
            'message.required'=>'Please enter message!',
        ]);
        $slug=uniqid('CON');
        $insert=Contactus::insert([
            'conus_name'=>$request['name'],
            'conus_email'=>$request['email'],
            'conus_sub'=>$request['subject'],
            'conus_mess'=>$request['message'],
            'conus_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success');
            return redirect('contact');
        }else{
            Session::flash('error');
            return redirect('contact');
        }
    }
}
