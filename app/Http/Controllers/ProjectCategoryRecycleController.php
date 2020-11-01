<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectCategory;
use Session;

class ProjectCategoryRecycleController extends Controller
{
    public function index(){
        $allRecycleProjectCategory=ProjectCategory::onlyTrashed()->latest()->get();
        return view('admin.recycle.project_category',compact('allRecycleProjectCategory'));
      }
  
      public function restore($id){
        $projectCategory=ProjectCategory::onlyTrashed()->findOrFail($id);
        $projectCategory->restore();
  
        Session::flash('restore','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
      }
  
  
      public function delete($id){
        $projectCategory=ProjectCategory::onlyTrashed()->findOrFail($id);
        $projectCategory->forceDelete();
  
        Session::flash('delete','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
      }
}
