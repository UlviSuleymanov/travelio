<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Marquee;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $blogs = Blog::with('admin')->get();
        $sliders = Slider::all();
        $marquees = Marquee::all();
        return view("front/home", compact(['blogs', 'sliders','marquees']));
    }


}
