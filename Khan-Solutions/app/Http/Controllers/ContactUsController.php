<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Contactus;
use Carbon\Carbon;
use Session;

class ContactUsController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $all=Contactus::where('conus_status',1)->orderBy('conus_id','DESC')->get();
        return view('admin.contactus.all',compact('all'));
    }

    public function view($slug){
        $data=Contactus::where('conus_status',1)->where('conus_slug',$slug)->firstOrFail();
        return view('admin.contactus.view',compact('data'));
    }

    public function softdelete(){
        $id=$_POST['modal_id'];
        $soft=Contactus::where('conus_status',1)->where('conus_id',$id)->update([
            'conus_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            Session::flash('success_soft','value');
            return redirect('dashboard/contactus');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/contactus');
        }
    }

    public function restore(){
        $id=$_POST['modal_id'];
        $restore=Contactus::where('conus_status',0)->where('conus_id',$id)->update([
            'conus_status'=>1,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($restore){
            Session::flash('restore','value');
            return redirect('dashboard/recycle/contactus');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/recycle/contactus');
        }
    }

    public function delete(){
        $id=$_POST['modal_id'];
        $del=Contactus::where('conus_status',0)->where('conus_id',$id)->delete();
        if($del){
            Session::flash('delete','value');
            return redirect('dashboard/recycle/contactus');
        }else{
          Session::flash('error','value');
          return redirect('dashboard/recycle/contactus');
        }
    }
}
