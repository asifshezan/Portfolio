<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;


class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Experience::where('exp_status',1)->orderBy('exp_id','DESC')->get();
        return view('admin.experience.index', compact('all'));
    }

    public function create(){
        return view('admin.experience.create');
    }

    public function store(Request $request){
        $slug = uniqid();
        $insert = Experience::insertGetId([
            'exp_year' => $request['exp_year'],
            'exp_title' => $request['exp_title'],
            'exp_subtitle' => $request['exp_subtitle'],
            'exp_text' => $request['exp_text'],
            'exp_slug' => $slug,
            'exp_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','successs');
            return redirect()->route('experience.index');
        }else{
            Session::flash('error','opps!');
            return redirect()->back();
        }
    }

    public function view($slug){
        $data = Experience::where('exp_status',1)->where('exp_slug',$slug)->firstOrFail();
        return view('admin.experience.view', compact('data'));
    }

    public function edit($slug){
        $data = Experience::where('exp_status',1)->where('exp_slug',$slug)->firstOrFail();
        return view('admin.experience.edit', compact('data'));
    }

    public function update(Request $request){
        $id = $request->exp_id;

        $update = Experience::where('exp_id',$id)->update([
            'exp_year' => $request['exp_year'],
            'exp_title' => $request['exp_title'],
            'exp_subtitle' => $request['exp_subtitle'],
            'exp_text' => $request['exp_text'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','Successfully update.');
            return redirect()->route('experience.index');
        }else{
            Session::flash('error','Opps! Failed to update.');
            return redirect()->back();
        }
    }

    public function softdelete($slug){
        $soft = Experience::where('exp_status',1)->where('exp_slug',$slug)->update([
            'exp_status' => 0
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
