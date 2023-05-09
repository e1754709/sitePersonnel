<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view("home");
    }
    public function resume(){
        return view("resume");
    }
    public function contact(){
        return view("contact");
    }
    public function contactForm(Request $request){
        return view("contact", ["data" => $request]);
    }
    public function projects(){
        return view("projects");
    }
}
