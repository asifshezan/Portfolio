<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ContactMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class ContactMessageController extends Controller
{
    public function index(){
        $all = ContactMessage::where('cm_status',1)->orderBy('cm_id','ASC')->get();
        return view('admin.contact_mess.index', compact('all'));
    }

    public function view($id){
        $data = ContactMessage::where('cm_status',1)->where('cm_id',$id)->firstOrFail();
        return view('admin.contact_mess.view', compact('data'));
    }

    public function softdelete($id){
        $soft = ContactMessage::where('cm_status',1)->where('cm_id',$id)->update([
            'cm_status' => 0
        ]);

        if($soft){
            Session::flash('success','Successfully delete.');
            return redirect()->back();
        }else{
            Session::flash('error', 'Opps! Failed to delete.');
            return redirect()->back();
        }
    }

}
