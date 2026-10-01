<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;

class BlogController extends Controller
{
    public function adminIndex()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs')); // Ensure this view exists in the admin folder
    }
    public function index()
    {
        $blogs = Blog::whereRaw('LOWER(status) = ?', ['published'])->get(); // Fetch all published blogs
        return view('frontend.projects', compact('blogs'));  // Pass blogs to the view
    }
    public function homepage()
    {
        // Fetch the latest 3 published blogs for the homepage
        $latestBlogs = Blog::whereRaw('LOWER(status) = ?', ['published'])
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('frontend.index', compact('latestBlogs'));
    }

    public function create()
    {
        $categories = Category::all(); // Fetch all categories to display in the form

        return view('admin.blogs.create', compact('categories')); // Pass categories to the view
    }
    public function store(Request $request)
    {
        // Validate the request input
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required',
            'categories' => 'required|array',  // Ensure categories are selected
            'categories.*' => 'exists:categories,id',  // Ensure all categories exist
        ]);

        // Determine the blog's status (published or draft)
        $status = $request->input('status') == 1 ? 'Published' : 'Draft';

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('blog_images', 'public'); // Store in the public folder
        }

        // Handle multiple project images upload (new logic for project images)
        $projectImages = [];
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $projectImages[] = $image->store('blog_images', 'public');
            }
        }

        // Create the blog post
        $blog = Blog::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'status' => $status,
            'image' => $imagePath,
            'project_images' => $projectImages, // Save the project images
        ]);

        // Attach categories to the blog
        $blog->categories()->sync($request->input('categories')); // Attach categories from the form

        // Redirect to the blog index with success message
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }


    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $blog->id,
            'content' => 'required',
            'image' => 'nullable|image',
            'author' => 'required',
        ]);

        $blog->update($request->all());

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
    public function show($slug)
    {
        // Find the blog by slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Fetch related blogs (for example, by category or randomly)
        $relatedBlogs = Blog::where('id', '!=', $blog->id) // Exclude current blog
            ->inRandomOrder()
            ->take(3) // Limit to 3 related blogs
            ->get();

        // Pass the blog and related blogs to the view
        return view('frontend.blog-details', compact('blog', 'relatedBlogs'));
    }
public function showProjects()
{
    $blogs = Blog::whereRaw('LOWER(status) = ?', ['published'])->get();
    $categories = Category::all(); // Pass categories for filtering

    return view('frontend.projects', compact('blogs', 'categories'));
}
public function filterProjects($categoryId)
{
    $categories = Category::all();

    $blogs = Blog::whereRaw('LOWER(status) = ?', ['published'])
        ->whereHas('categories', function ($query) use ($categoryId) {
            $query->where('categories.id', $categoryId); // Add table prefix for clarity
        })->get();

    return view('frontend.projects', compact('blogs', 'categories'));
}

}

