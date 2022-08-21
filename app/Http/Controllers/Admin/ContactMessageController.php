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

}
