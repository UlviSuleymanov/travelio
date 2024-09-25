<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view("front/pages/blogs/index");
    }

    public function single(string $slug){
         //Databaseden data cekilmeli ve viewa gonderilmelidir.
        return view("front/pages/blogs/single");
    }
}
