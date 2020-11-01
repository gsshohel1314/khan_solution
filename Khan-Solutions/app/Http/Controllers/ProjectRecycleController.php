<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Session;

class ProjectRecycleController extends Controller
{
    public function index(){
        $allRecycleProject=Project::onlyTrashed()->latest()->get();
        return view('admin.recycle.project',compact('allRecycleProject'));
      }
  
      public function restore($id){
        $project=Project::onlyTrashed()->findOrFail($id);
        $project->restore();
  
        Session::flash('restore','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
      }
  
  
      public function delete($id){
        $project=Project::onlyTrashed()->findOrFail($id);
        $project->forceDelete();
  
        Session::flash('delete','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
      }
}
