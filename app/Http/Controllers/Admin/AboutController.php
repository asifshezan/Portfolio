<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index(){
        $all = About::where('ab_status',1)->orderBy('ab_id','ASC')->get();
        return view('admin.about.index', compact('all'));
    }

    public function create(){
        return view('admin.about.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ab_title' => ['required'],
            'ab_subtitle' => ['required']
    ],[
        'ab_title' => 'Please insert title',
        'ab_subtitle' => 'Please insert subtitle'
    ]);

    $slug = uniqid();
    $insert = About::insertGetId([
        'ab_title' => $request['ab_title'],
        'ab_subtitle' => $request['ab_subtitle'],
        'ab_details' => $request['ab_details'],
        'ab_slug' => $slug,
        'ab_status' => 1,
        'created_at' => Carbon::now()->toDateTimeString()
    ]);

    if($insert){
        Session::flash('success','Successfully insert about details.');
        return redirect()->route('about.index');
    }else{
        Session::flash('error','Opps! Failed to insert.');
        return redirect()->back();
    }
}

    public function view($slug){
        $data = About::where('ab_status',1)->where('ab_slug',$slug)->firstOrFail();
        return view('admin.about.view', compact('data'));
    }


    public function edit($slug){
        $data = About::where('ab_status',1)->where('ab_slug',$slug)->firstOrFail();
        return view('admin.about.edit', compact('data'));
    }

    public function update(Request $request){


        $id = $request['ab_id'];
        $slug = uniqid();
        $update = About::where('ab_id',$id)->update([
            'ab_title' => $request['ab_title'],
            'ab_subtitle' => $request['ab_subtitle'],
            'ab_details' => $request['ab_details'],
            'ab_slug' => $slug,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success', 'Successfully update');
            return redirect()->route('about.index');
        }else{
            Session::flash('error', 'update Failed.');
            return redirect()->back();
        }
    }

    public function softdelete(){
        $soft = About::where('ab_status',1)->update([
            'ab_status' => 0
        ]);

        if($soft){
            Session::flash('success','Successfully delete.');
            return redirect()->route('about.softdelete');
        }else{
            Session::flash('error','Opps! failed to delete');
            return redirect()->back();
        }
    }

}
