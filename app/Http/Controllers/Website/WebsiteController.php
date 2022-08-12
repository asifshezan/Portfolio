<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about(){
        return view('website.about');
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
}
