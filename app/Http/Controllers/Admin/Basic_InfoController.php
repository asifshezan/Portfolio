<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basic_Info;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class Basic_InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $basic_all = Basic_Info::where('info_status',1)->orderBy('info_id','DESC')->firstOrFail();
        return view('admin.Basic_Info.basic_info', compact('basic_all'));
    }
}
