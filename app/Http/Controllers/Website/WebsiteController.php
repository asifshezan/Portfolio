<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use App\Mail\Contact;
// use App\Mail\contact_message;
use App\Models\ContactMessage;
use App\Models\Counter;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class WebsiteController extends Controller
{
    public function about(){
        $views = Counter::latest()->paginate(5);
        Counter::increment('views');
        return view('website.about', compact('views'));
    }

    public function skill(){
        return view('website.skill');
    }

    public function service(){
        return view('website.service');
    }

    public function experience(){
        return view('website.experience');
    }

    public function education(){
        return view('website.education');
    }

    public function portfolio(){
        return view('website.portfolio');
    }

    public function contact(){
        return view('website.contact');
    }


    public function contactmess(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'cm_email' => ['required'],
            'cm_phone' => ['required'],
        ],[
            'cm_email' => 'Please enter email',
            'cm_phone' => 'Please enter phone'
        ]);

        $slug = Str::slug($request->cm_name, '-');

        $insert = ContactMessage::insertGetId([
            'cm_name' => $request['cm_name'],
            'cm_email' => $request['cm_email'],
            'cm_subject' => $request['cm_subject'],
            'cm_phone' => $request['cm_phone'],
            'cm_message' => $request['cm_message'],
            'cm_slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        // Mail::to($request->cm_email)->send(new contact_message($request->cm_message));
        // Mail::to('asifshezan7@gamil.com')->send(new contact_message($request->cm_message));

        if($insert){
            Session::flash('success', 'Message Successfully Send.');
            return redirect()->back();
        }else{
            Session::flash('error','opps! failed');
            return redirect()->back();
        }


    }
}
