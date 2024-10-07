<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        return view("front/pages/contact/index");
    }

    public function contactForm(Request $request){

    }

    public function about(){
        return view("front/pages/about/index");
    }
}
