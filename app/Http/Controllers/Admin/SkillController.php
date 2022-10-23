<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Skill::where('skill_status',1)->orderBy('skill_id','DESC')->get();
        return view('admin.skills.index', compact('all'));
    }

    public function create(){
        return view('admin.skills.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'skill_title' => ['required']
        ], [
            'skill_title.required' => 'Please enter the title'
        ]);

        $slug = Str::slug($request['skill_title'],'-');
        $insert = Skill::insertGetId([
            'skill_title' => $request['skill_title'],
            'skill_subtitle' => $request['skill_subtitle'],
            'skill_details' => $request['skill_details'],
            'skill_slug' => $slug,
            'skill_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','Successfully insert');
            return redirect()->route('skill.index');
        }else{
            Session::flash('error','Opps!! Failed to insert');
            return redirect()->back();
        }
    }
}
