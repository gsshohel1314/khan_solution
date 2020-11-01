<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;

class ServiceRecycleController extends Controller
{
    public function index(){
        $allRecycleService=Service::onlyTrashed()->latest()->get();
        return view('admin.recycle.service',compact('allRecycleService'));
      }
  
      public function restore($id){
        $service=Service::onlyTrashed()->findOrFail($id);
        $service->restore();
  
        Session::flash('restore','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
      }
  
  
      public function delete($id){
        $service=Service::onlyTrashed()->findOrFail($id);
        $service->forceDelete();
  
        Session::flash('delete','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
      }
}
