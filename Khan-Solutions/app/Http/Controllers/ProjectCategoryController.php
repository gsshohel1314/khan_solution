<?php

namespace App\Http\Controllers;

use App\ProjectCategory;
use App\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Storage;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $projectCategory = ProjectCategory::all();
        return view('admin.project_category.all',compact('projectCategory'));
    }

    public function create()
    {
        return view('admin.project_category.add');
    }

    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => ['required'],
            ],[
                'name.required'   =>'Please enter service category name',
            ]);
    
            $projectCategory = new ProjectCategory();
            $projectCategory->name = $request->name;
            $projectCategory->save();
    
            Session::flash('success','value');
            return redirect()->back();
            Session::flash('error','value');
            return redirect()->back();
        }
    }

    public function show(ProjectCategory $projectCategory)
    {
        
    }

    public function edit(ProjectCategory $projectCategory, $id)
    {
        $projectCategory=ProjectCategory::findOrFail($id);
        return view('admin.project_category.edit',compact('projectCategory'));
    }

    public function update(Request $request, ProjectCategory $projectCategory, $id)
    {
        $projectCategory=ProjectCategory::findOrFail($id);

        {
            $request->validate([
                'name' => ['required'],
            ],[
                'name.required'   =>'Please enter service category name',
            ]);
    
            $projectCategory->name = $request->name;
            $projectCategory->save();
    
            Session::flash('success','value');
            return redirect()->back();
            Session::flash('error','value');
            return redirect()->back();
        }
    }

    public function destroy(ProjectCategory $projectCategory, $id)
    {
        $projectCategory=ProjectCategory::findOrFail($id);

        $data = Project::where('pro_cat_id', $id)->get();
        foreach($data as $value){
            if(Storage::disk('public')->exists('project'.$value->image)){
                Storage::disk('public')->delete('project'.$value->image);
            }
        }
        $data->each->delete();
        $delete=$projectCategory->delete();

        if($delete){
            Session::flash('success_soft','value');
            return redirect()->back();
        }else{
            Session::flash('error','value');
            return redirect()->back();
        }
    }

    public function status($id)
    {
        $projectCategory=ProjectCategory::find($id);
        if($projectCategory->status==false)
        {
            $projectCategory->status=true;
            $projectCategory->save();

            Session::flash('success_publish','value');
            return back();

            Session::flash('error','value');
            return back();
        }else
        {
            $projectCategory->status=false;
            $projectCategory->save();

            Session::flash('success_publish','value');
            return back();

            Session::flash('error','value');
            return back();
        }
    }
}
