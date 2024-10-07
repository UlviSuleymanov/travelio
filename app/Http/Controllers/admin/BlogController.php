<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function blogsManage()
    {
        $blogs = Blog::all(); // You may add pagination here
        return view('admin.blogs.manage', compact('blogs'));
    }


    public function blogsAdd()
    {
        return view('admin/blogs/add');
    }

    // Handle the blog form submission
    public function blogsAddPost(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required|max:500',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'thumb' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image and thumbnail upload
        $imagePath = $request->file('image')->store('blogs/images', 'public');
        $thumbPath = $request->file('thumb')->store('blogs/thumbnails', 'public');

        // Create a slug for the blog post
        $slug = Str::slug($request->title);

        // Save the blog post
        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => $slug,
            'category_id' => 1, // Assign a category ID, you can fetch this dynamically if needed
            'admin_id' => auth()->user()->id, // Assuming the admin is logged in
            'thumb' => $thumbPath,
            'image' => $imagePath,
            'status' => 1, // Default status
        ]);

        // Redirect to the manage blogs page with a success message
        return redirect()->route('admin.blogs-manage')->with('success', 'Blog post created successfully!');
    }

    public function editOrUpdate(Request $request, $id)
    {
        // Step 1: Find the blog post by ID
        $blog = Blog::findOrFail($id);

        // Step 2: Check if the request is a GET or POST
        if ($request->isMethod('get')) {
            // Show the edit page with the blog data
            return view('admin.blogs.edit', compact('blog'));
        }

        // Step 3: If it's a POST request, handle the form submission (update)
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thumb' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update blog fields
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($blog->image) {
                Storage::delete('public/' . $blog->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('images', 'public');
            $blog->image = $imagePath;
        }

        // Handle new thumbnail upload
        if ($request->hasFile('thumb')) {
            // Delete old thumbnail if it exists
            if ($blog->thumb) {
                Storage::delete('public/' . $blog->thumb);
            }

            // Store new thumbnail
            $thumbPath = $request->file('thumb')->store('thumbnails', 'public');
            $blog->thumb = $thumbPath;
        }

        // Save the updated blog to the database
        $blog->save();

        // Redirect back with a success message
        return redirect()->route('admin.blogs-manage')->with('success', 'Blog updated successfully!');
    }

    public function blogsDelete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs-manage')->with('success', 'Blog post deleted successfully!');
    }


    public function updateStatus(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($blog) {
            $blog->status = $request->status; // Set the status to the value sent from the AJAX request
            $blog->save(); // Save the changes

            return response()->json(['success' => true, 'status' => $blog->status]);
        }

        return response()->json(['success' => false, 'message' => 'Blog not found.'], 404);
    }

}
