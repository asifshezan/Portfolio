<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Portfolio_Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
        // dd($request->all());
        $this->validate($request,[
            'port_cate_title' => ['required'],
        ],[
            'port_cate_title.required' => 'Please enter title',
        ]);

        $slug = Str::slug($request['port_cate_title']);
        $insert = Portfolio_Category::insertGetId([
            'port_cate_title' => $request['port_cate_title'],
            'port_cate_slug' => $slug,
            'port_cate_status' => 1,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('port_cate_image')){
        foreach($request->port_cate_image as $portfolioImage){
            $imageName =  uniqid() . '.' . $portfolioImage->getClientOriginalExtension();
            Image::make($portfolioImage)->resize(300,300)->save('uploads/portfolio_category/' . $imageName);

            Gallery::create([
                'portfolio_id' => $insert,
                'image' => $imageName,
            ]);
        }
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
            foreach($request->port_cate_image as $portfolioImage){
                $imageName =  uniqid() . '.' . $portfolioImage->getClientOriginalExtension();
                Image::make($portfolioImage)->resize(300,300)->save('uploads/portfolio_category/' . $imageName);

                Gallery::where('portfolio_id', $id)->create([
                    'portfolio_id' => $id,
                    'image' => $imageName,
                ]);
            }
            }

        if($update){
            Session::flash('success', 'Successfully update');
            return redirect()->back();
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

    public function imageRemove($gallery_id){
        $gallery = Gallery::where('gallery_id', $gallery_id)->first();

        // $gallery->delete();

        // Banner Images Delete
        if (File::exists('uploads/portfolio_category/' . $gallery->image)) {
            File::delete('uploads/portfolio_category/' .$gallery->image);
        }

        Gallery::where('gallery_id', $gallery_id)->delete();

        Session::flash('success', 'Successfully delete gallery image');
            return redirect()->back();
    }
}
