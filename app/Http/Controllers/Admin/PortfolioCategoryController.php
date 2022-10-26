<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio_Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class PortfolioCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Portfolio_Category::where('port_cate_status',1)->orderBy('port_cate_id','DESC')->get();
        return view('admin.portfolio_category.index', compact('all'));
    }

    public function create(){
        return view('admin.portfolio_category.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'port_cate_title' => ['required'],
            'port_cate_image' => ['required']
        ],[
            'port_cate_title.required' => 'Please enter title',
            'port_cate_image.required' => 'Please select a image',
        ]);

        $slug = Str::slug($request['port_cate_title']);
        $insert = Portfolio_Category::insertGetId([
            'port_cate_title' => $request['port_cate_title'],
            'port_cate_slug' => $slug,
            'port_cate_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('port_cate_image')){
            $image = $request->file('port_cate_image');
            $imageName = $insert . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('uploads/portfolio_category/' . $imageName);

            Portfolio_Category::where('port_cate_id', $insert)->update([
                'port_cate_image' => $imageName,
            ]);
        }

        if($insert){
            Session::flash('success', 'Successfully insert');
            return redirect()->route('portfolio_category.index');
        }else{
            Session::flash('error', 'Insert Failed.');
            return redirect()->back();
        }
    }

    public function view($slug){
        $data = Portfolio_Category::where('port_cate_status',1)->where('port_cate_slug',$slug)->firstOrFail();
        return view('admin.portfolio_category.view', compact('data'));
    }

    public function edit($slug){
        $data = Portfolio_Category::where('port_cate_status',1)->where('port_cate_slug',$slug)->firstOrFail();
        return view('admin.portfolio_category.edit', compact('data'));
    }

    public function update(Request $request){
        $this->validate($request,[
            'port_cate_title' => ['required'],
        ],[
            'port_cate_title.required' => 'Please enter title',
        ]);

        $id = $request['port_cate_id'];
        $slug = Str::slug($request['port_cate_title']);
        $update = Portfolio_Category::where('port_cate_id',$id)->update([
            'port_cate_title' => $request['port_cate_title'],
            'port_cate_slug' => $slug,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('port_cate_image')){
            $image = $request->file('port_cate_image');
            $imageName = $id . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('uploads/portfolio_category/' . $imageName);

            Portfolio_Category::where('port_cate_id',$id)->update([
                'port_cate_image' => $imageName,
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }

        if($update){
            Session::flash('success', 'Successfully update');
            return redirect()->route('portfolio_category.index');
        }else{
            Session::flash('error', 'update Failed.');
            return redirect()->back();
        }
    }

    public function softdelete($slug){
        $softdelete = Portfolio_Category::where('port_cate_status',1)->where('port_cate_slug',$slug)->update([
            'port_cate_status' => 0
        ]);

        if($softdelete){
            Session::flash('success', 'Successfully softdelete');
            return redirect()->route('portfolio_category.index');
        }else{
            Session::flash('error', 'softdelete Failed.');
            return redirect()->back();
        }
    }
}
