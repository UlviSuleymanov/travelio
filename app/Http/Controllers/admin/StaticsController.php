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
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        // Handle image and thumbnail upload
        $imagePath = $request->file('image')->store('slider/images', 'public');

        // Create a slug for the blog post
        $slug = Str::slug($request->title);

        // Save the blog post
        Slider::create([
            'title' => $request->title,
            'image' => $imagePath,
            'status' => 1, // Default status
        ]);

        // Redirect to the manage blogs page with a success message
        return redirect()->route('admin.slider-manage')->with('success', 'Slider  created successfully!');
    }
    public function sliderEdit(Request $request, int $id){
        // Step 1: Find the blog post by ID
        $slider = Slider::findOrFail($id);

        // Step 2: Check if the request is a GET or POST
        if ($request->isMethod('get')) {
            // Show the edit page with the blog data
            return view('admin.statics.sliders.edit', compact('slider'));
        }

        // Step 3: If it's a POST request, handle the form submission (update)
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Update blog fields
        $slider->title = $request->input('title');

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($slider->image) {
                Storage::delete('public/' . $slider->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('images', 'public');
            $slider->image = $imagePath;
        }

        // Save the updated blog to the database
        $slider->save();

        // Redirect back with a success message
        return redirect()->route('admin.slider-manage')->with('success', 'Slider updated successfully!');
    }
    public function sliderDelete(Request $request, int $id){

    }
}
