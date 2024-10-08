<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Marquee;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{


    public function manage(){
        $marquees = Marquee::all();

        return view("admin.statics.marquee.manage",compact('marquees'));
    }

    public function add(){
        return view("admin.statics.marquee.add");
    }

    public function addPost(Request $request){

        $validated = $request->validate([
            'title' => 'required|max:500',
        ]);

        Marquee::create([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.marquee-manage')->with('success', 'Marquee  created successfully!');
    }
    public function edit(Request $request, int $id){

        $marquee = Marquee::findOrFail($id);


        if ($request->isMethod('get')) {
            return view('admin.statics.marquee.edit', compact('marquee'));
        }

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $marquee->title = $request->input('title');
        $marquee->save();
        return redirect()->route('admin.marquee-manage')->with('success', 'Slider updated successfully!');

    }

    public function delete(Request $request, int $id){
        $marquee = Marquee::findOrFail($id);
        $marquee->delete();
        return redirect()->route("admin.marquee-manage")->with('success', 'Marquee deleted successfully!');
    }
}
