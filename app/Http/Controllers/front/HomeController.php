<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $blogs = Blog::with('admin')->get();
        return view("front/home", compact('blogs'));
    }



}
