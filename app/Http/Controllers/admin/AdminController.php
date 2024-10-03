<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){
        $admin = auth()->user();

        return view('admin.dashboard', compact('admin'));
    }


    public function blogsManage(){
        return view('admin/blogs/manage');
    }

    public function blogsAdd(){
        return view('admin/blogs/add');

    }
    public function blogsAddPost(){
        return view('admin/blogs/add');
    }
    public function blogsEdit(Request $request){
        return view('admin/blogs/edit');
    }
    public function blogsEditPost(Request $request){
        return view('admin/blogs/edit');
    }
}
