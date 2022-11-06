<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basic_Info;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class BasicInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $basic_all = Basic_Info::where('info_status',1)->where('info_id',1)->firstOrFail();
        return view('admin.Basic_Info.basic_info', compact('basic_all'));
    }
    public function update(Request $request){
        $update = Basic_Info::where('info_status',1)->where('info_id',1)->update([
            'info_name' => $request['info_name'],
            'info_location' => $request['info_location'],
            'info_birth' => $request['info_birth'],
            'info_email' => $request['info_email'],
            'info_phone' => $request['info_phone'],
            'info_website' => $request['info_website'],
            'info_facebook' => $request['info_facebook'],
            'info_instagram' => $request['info_instagram'],
            'info_linkedin' => $request['info_linkedin'],
            'info_github' => $request['info_github'],
            'info_status' => 1,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('info_image')){
            $image = $request->file('info_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/basics/' . $imageName);

            Basic_Info::where('info_id',1)->update([
                'info_image' => $imageName
            ]);
        }

        if($update){
            Session::flash('success', 'Successfully updated');
            return redirect()->back();
        }else{
            Session::flash('error', 'Failed to updated');
            return redirect()->back();
        }
    }
}

