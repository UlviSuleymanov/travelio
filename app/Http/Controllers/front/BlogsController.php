<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        $selected = Blog::with('admin')->latest()->first();
        $blogs = Blog::with('admin')->latest()->get();
        $sidebar_blogs = Blog::with('admin')->limit(5)->latest()->get();
        return view("front/pages/blogs/index", compact(['blogs','selected','sidebar_blogs']));
    }

    public function single(string $slug){
        $blog = Blog::with('admin')->where('slug', $slug)->firstOrFail();
        $footer_blogs = Blog::with('admin')->latest()->limit(2)->get();
        $sidebar_blogs = Blog::with('admin')->latest()->limit(5)->get();
        return view("front/pages/blogs/single", compact(['blog','footer_blogs','sidebar_blogs']));
    }
}
