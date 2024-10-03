<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request){

        return view('admin.dashboard');
    }


    public function blogsManage(){
        return view('admin/blogs/manage');
    }

    public function blogsAdd(){
        return view('admin/blogs/add');

    }
    public function blogsEdit(){
        return view('admin/blogs/edit');
    }
}
