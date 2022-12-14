<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Education::where('edu_status',1)->orderBy('edu_id','ASC')->get();
        return view('admin.education.index', compact('all'));
    }

    public function create(){
        return view('admin.education.create');
    }

    public function store(Request $request){
        $slug = uniqid();
        $insert = Education::insertGetId([
            'edu_year' => $request['edu_year'],
            'edu_title' => $request['edu_title'],
            'edu_subtitle' => $request['edu_subtitle'],
            'edu_text' => $request['edu_text'],
            'edu_slug' => $slug,
            'edu_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $insert .'.'. time() .'.'. rand(1000,10000) .'.'. $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/education/'.$imageName);

            Education::where('edu_id',$insert)->update([
                'edu_image' => $imageName
            ]);
        }

        if($insert){
            Session::flash('success','successs');
            return redirect()->route('education.index');
        }else{
            Session::flash('error','opps!');
            return redirect()->back();
        }
    }

    public function view($slug){
        $data = Education::where('edu_status',1)->where('edu_slug',$slug)->firstOrFail();
        return view('admin.education.view', compact('data'));
    }

    public function edit($slug){
        $data = Education::where('edu_status',1)->where('edu_slug',$slug)->firstOrFail();
        return view('admin.education.edit', compact('data'));
    }

    public function update(Request $request){
        $id = $request->edu_id;

        $update = Education::where('edu_id',$id)->update([
            'edu_year' => $request['edu_year'],
            'edu_title' => $request['edu_title'],
            'edu_subtitle' => $request['edu_subtitle'],
            'edu_text' => $request['edu_text'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $id. '.' . time() . '.' .rand(1999,2999). '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(250,250)->save('uploads/education/'.$imageName);

            Education::where('edu_id',$id)->update([
                'edu_image' => $imageName
            ]);
        }
        if($update){
            Session::flash('success','Successfully update.');
            return redirect()->route('education.index');
        }else{
            Session::flash('error','Opps! Failed to update.');
            return redirect()->back();
        }
    }

    public function softdelete($slug){
        $soft = Education::where('edu_status',1)->where('edu_slug',$slug)->update([
            'edu_status' => 0
        ]);
        if($soft){
            Session::flash('success','Successfully delete.');
            return redirect()->back();
        }else{
            Session::flash('error','failed delete.');
            return redirect()->back();
        }
    }
}
