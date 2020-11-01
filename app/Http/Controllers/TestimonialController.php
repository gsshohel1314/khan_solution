<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Testimonial;
use App\ClientReview;
use Carbon\Carbon;
use Session;
use Image;

class TestimonialController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $all=Testimonial::where('tm_status',1)->orderBy('tm_id','ASC')->get();
        return view('admin.testimonial.all',compact('all'));
    }

    public function add(){
        $reviews = ClientReview::where('status',1)->get();
        return view('admin.testimonial.add',compact('reviews'));
    }

    public function edit($slug){
        $reviews = ClientReview::where('status',1)->get();
        $data=Testimonial::where('tm_status',1)->where('tm_slug',$slug)->firstOrFail();
        return view('admin.testimonial.edit',compact('data','reviews'));
    }

    public function view($slug){
        $data=Testimonial::where('tm_status',1)->where('tm_slug',$slug)->firstOrFail();
        return view('admin.testimonial.view',compact('data'));
    }

    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required|max:50',
            'designation'=>'required',
            'company'=>'required',
            'opinion'=>'required',
            'review'=>'required',
            'pic'=>'required',
        ],[
            'name.required'=>'Please enter client Name!',
            'designation.required'=>'Please enter client designation!',
            'company.required'=>'Please enter company/organization!',
            'opinion.required'=>'Please enter client opinion!',
            'review.required'=>'Please enter client review!',
            'pic.required'=>'Please upload image!',
        ]);
        $slug=uniqid('T');
        $insert=Testimonial::insertGetId([
            'tm_name'=>$request['name'],
            'tm_designation'=>$request['designation'],
            'tm_company'=>$request['company'],
            'tm_opinion'=>$request['opinion'],
            'tm_review'=>$request['review'],
            'tm_slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($request->hasFile('logo')){
            $image=$request->file('logo');
            $logoName='logo'.'_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/testimonial/logo/'.$logoName);
  
            Testimonial::where('tm_id',$insert)->update([
                'tm_logo'=>$logoName
            ]);
        }

        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='client'.'_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/testimonial/'.$imageName);

          Testimonial::where('tm_id',$insert)->update([
              'tm_image'=>$imageName
          ]);
        }

        if($insert){
            Session::flash('success');
            return redirect('dashboard/testimonial/add');
        }else{
            Session::flash('error');
            return redirect('dashboard/testimonial/add');
        }
    }

    public function update(Request $request){
        $id=$request['id'];
        $slug=$request['slug'];
        $update=Testimonial::where('tm_status',1)->where('tm_id',$id)->update([
            'tm_name'=>$request['name'],
            'tm_designation'=>$request['designation'],
            'tm_company'=>$request['company'],
            'tm_opinion'=>$request['opinion'],
            'tm_review'=>$request['review'],
            'tm_slug'=>$slug,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);


        if($request->hasFile('logo')){
            $image=$request->file('logo');
            $logoName='client_logo'.'_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/testimonial/logo/'.$logoName);
  
            Testimonial::where('tm_id',$id)->update([
                'tm_logo'=>$logoName
            ]);
          }

        if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName='client'.'_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/testimonial/'.$imageName);

          Testimonial::where('tm_id',$id)->update([
              'tm_image'=>$imageName
          ]);
        }

        if($update){
            Session::flash('success');
            return redirect()->back();
        }else{
            Session::flash('error');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $testimonial=Testimonial::where('tm_status',1)->findOrFail($id);
        $delete=$testimonial->delete();

        if($delete){
            Session::flash('success_soft','value');
            return redirect()->back();
        }else{
            Session::flash('error','value');
            return redirect()->back();
        }
    }
}
