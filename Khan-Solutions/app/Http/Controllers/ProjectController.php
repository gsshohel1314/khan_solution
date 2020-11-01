<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use Image;
use Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        // return $projects;
        return view('admin.project.all',compact('projects'));
    }

    public function create()
    {
        $categories=ProjectCategory::where('status',1)->orderBy('id','ASC')->get();
        return view('admin.project.add',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'category'=> ['required'],
            'image'=> ['required'],
        ],[
            'name.required'   =>'Please enter project name',
            'category.required'  =>'Please enter project category',
            'image.required'  =>'Please enter project photo',
        ]);

        $imageName ='';

        if($request->hasFile('image')){
            $image=$request->file('image');
            $projectName=Str::slug($request->name);
            $imageName=$projectName.'_'.Carbon::today()->toDateString().'.'.$image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('project')){
                Storage::disk('public')->makeDirectory('project');
            }
            Image::make($image)->resize(380 , 340)->save(public_path('storage/project/'.$imageName));
        }

        $project= new Project();
        $project->name=$request->name;
        $project->pro_cat_id=$request->category;
        $project->image=$imageName;
        $project->save();
       
        Session::flash('success','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
    }

    public function show(Project $project)
    {
        return view('admin.project.view',compact('project'));
    }

    public function edit(Project $project)
    {
        // return $project;
        $categories=ProjectCategory::where('status',1)->orderBy('id','ASC')->get();
        return view('admin.project.edit',compact('project','categories'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => ['required'],
            'category'=> ['required'],
            // 'image'=> ['required'],
        ],[
            'name.required'   =>'Please enter project name',
            'category.required'  =>'Please enter project category',
            // 'image.required'  =>'Please enter project photo',
        ]);

        // $imageName ='';

        if($request->hasFile('image')){
            $image=$request->file('image');
            $projectName=Str::slug($request->name);
            $imageName=$projectName.'_'.Carbon::today()->toDateString().'.'.$image->getClientOriginalExtension();
            if(Storage::disk('public')->exists('project/'.$project->image)){
                Storage::disk('public')->delete('project/'.$project->image);
            }
            Image::make($image)->resize(380 , 340)->save(public_path('storage/project/'.$imageName));
        }else{
            $imageName=$project->image;
        }

        $project->name=$request->name;
        $project->pro_cat_id=$request->category;
        $project->image=$imageName;
        $project->save();
       
        Session::flash('success','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
    }

    public function destroy(Project $project)
    {
        $delete=$project->delete();

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
        $project=Project::find($id);
        if($project->status==false)
        {
            $project->status=true;
            $project->save();

            Session::flash('success_publish','value');
            return back();

            Session::flash('error','value');
            return back();
        }else
        {
            $project->status=false;
            $project->save();

            Session::flash('success_publish','value');
            return back();

            Session::flash('error','value');
            return back();
        }
    }
}
