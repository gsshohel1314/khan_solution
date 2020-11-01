<?php

namespace App\Http\Controllers;

use App\Service;
use App\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use Image;
use Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.all',compact('services'));
    }

    public function create()
    {
        return view('admin.service.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'details'=> ['required'],
            'icon'=> ['required'],
        ],[
            'name.required'   =>'Please enter service title',
            'details.required'  =>'Please enter service details',
            'icon.required'   =>'Please enter icon',
        ]);

        $service= new Service();
        $service->name=$request->name;
        $service->details=$request->details;
        $service->icon=$request->icon;
        $service->save();
       
        Session::flash('success','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
    }

    public function show(Service $service)
    {
        return view('admin.service.view',compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin.service.edit',compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => ['required'],
            'details'=> ['required'],
            'icon'=> ['required'],
        ],[
            'name.required'   =>'Please enter service title',
            'details.required'  =>'Please enter service details',
            'icon.required'   =>'Please enter icon',
        ]);

        $service->name=$request->name;
        $service->details=$request->details;
        $service->icon=$request->icon;
        $service->save();
       
        Session::flash('success','value');
        return redirect()->back();
        Session::flash('error','value');
        return redirect()->back();
    }

    public function destroy(Service $service)
    {
        $delete=$service->delete();

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
        $services=Service::find($id);
        if($services->status==false)
        {
            $services->status=true;
            $services->save();

            Session::flash('success_publish','value');
            return back();

            Session::flash('error','value');
            return back();
        }else
        {
            $services->status=false;
            $services->save();

            Session::flash('success_publish','value');
            return back();

            Session::flash('error','value');
            return back();
        }
    }
}
