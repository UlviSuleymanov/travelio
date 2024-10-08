<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StaticsController extends Controller
{
    public function sliderManage(){
        $sliders = Slider::all();
        return view("admin.statics.sliders.manage", compact('sliders'));
    }
    public function sliderAdd(){
        return view('admin.statics.sliders.add');
    }
    public function sliderAddPost(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:500',
            'link' => 'required|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);


        $imagePath = $request->file('image')->store('slider/images', 'public');


        $slug = Str::slug($request->title);


        Slider::create([
            'title' => $request->title,
            'link' => $request->link,
            'image' => $imagePath,
            'status' => 1, // Default status
        ]);

        // Redirect to the manage blogs page with a success message
        return redirect()->route('admin.slider-manage')->with('success', 'Slider  created successfully!');
    }
    public function sliderEdit(Request $request, int $id){

        $slider = Slider::findOrFail($id);


        if ($request->isMethod('get')) {
            return view('admin.statics.sliders.edit', compact('slider'));
        }


        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);


        $slider->title = $request->input('title');


        if ($request->hasFile('image')) {

            if ($slider->image) {
                Storage::delete('public/' . $slider->image);
            }


            $imagePath = $request->file('image')->store('images', 'public');
            $slider->image = $imagePath;
        }


        $slider->save();


        return redirect()->route('admin.slider-manage')->with('success', 'Slider updated successfully!');
    }
    public function sliderDelete(Request $request, int $id){
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->route("admin.slider-manage")->with('success', 'Slider deleted successfully!');
    }
}
