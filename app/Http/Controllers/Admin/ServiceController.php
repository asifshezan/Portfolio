<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Service::where('ser_status',1)->orderBy('ser_id','DESC')->get();
        return view('admin.services.index', compact('all'));
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'ser_title' => ['required']
        ], [
            'ser_title.required' => 'Please enter the title'
        ]);

        $slug = Str::slug($request['ser_page_title'],'-');
        $insert = Service::insertGetId([
            'ser_page_title' => $request['ser_page_title'],
            'ser_page_subtitle' => $request['ser_page_subtitle'],
            'ser_icon' => $request['ser_icon'],
            'ser_title' => $request['ser_title'],
            'ser_text' => $request['ser_text'],
            'ser_slug' => $slug,
            'ser_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','Successfully insert');
            return redirect()->route('service.index');
        }else{
            Session::flash('error','Opps!! Failed to insert');
            return redirect()->back();
        }
    }
}
