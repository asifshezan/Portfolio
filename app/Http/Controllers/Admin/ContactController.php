<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all = Contact::where('cont_status',1)->orderBy('cont_id','ASC')->get();
        return view('admin.contact.index', compact('all'));
    }

    public function create(){
        return view('admin.contact.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'cont_title' => ['required'],
            'cont_subtitle' => ['required'],
            'cont_details' => ['required'],
            'cont_button' => ['required']
        ],[
            'cont_title' => 'Please enter title',
            'cont_subtitle' => 'Please enter subtitle',
            'cont_details' => 'Please enter details',
            'cont_button' => 'Please enter button'
        ]);

        $slug = uniqid();
        $insert = Contact::insertGetId([
            'cont_title' => $request['cont_title'],
            'cont_subtitle' => $request['cont_subtitle'],
            'cont_details' => $request['cont_details'],
            'cont_button' => $request['cont_button'],
            'cont_slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success', 'Successfully add contact details');
            return redirect()->route('contact.index');
        }else{
            Session::flash('error', 'Opps! failed to add.');
            return redirect()->back();
        }
    }
}
