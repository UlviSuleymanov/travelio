<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view("front/pages/blogs/index");
    }

    public function single(string $slug){
        $blog = Blog::with('admin')->where('slug', $slug)->firstOrFail();

        return view("front/pages/blogs/single", compact('blog'));
    }
}
