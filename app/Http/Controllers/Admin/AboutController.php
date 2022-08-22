<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
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

}
