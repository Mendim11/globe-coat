<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;

class NewsController extends Controller
{
    public function index()
    {
        // Fetch all news from the database
        $news = News::all();

        // Return the view and pass the news data to it
        return view('admin.news.index', compact('news'));
    }
    public function frontendIndex()
    {
        // Fetch all news for the frontend, paginated
        $news = News::latest()->paginate(5); // Paginate news

        // Fetch all categories
        $categories = Category::withCount('news')->get(); // Fetch categories with news count

        // Fetch recent news for the sidebar
        $recentNews = News::latest()->take(5)->get(); // Limit the recent news to 5

        // Pass data to the view
        return view('frontend.news', compact('news', 'categories', 'recentNews'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:news',
            'content' => 'required',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required',
            'status' => 'required|in:published,draft', // Validate status as either 'published' or 'draft'
            'project_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each project image
        ]);

        // Handle the thumbnail image
        $thumbnailImage = null;
        if ($request->hasFile('thumbnail_image')) {
            $thumbnailImage = $request->file('thumbnail_image')->store('news_images', 'public');
        }

        // Handle multiple project images
        $projectImages = [];
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $path = $image->store('news_images', 'public');
                $projectImages[] = $path;
            }
        }

        // Create the news
        $news = News::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'status' => $request->input('status'), // Store the exact status value (e.g., 'published', 'draft')
            'thumbnail_image' => $thumbnailImage,
            'project_images' => json_encode($projectImages), // Store the project images as a JSON array
        ]);

        // Redirect to news index with success message
        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }


    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        // Find the news by ID
        $news = News::findOrFail($id);

        // Validate the request input
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:news,slug,' . $news->id,  // Unique slug except for the current news
            'content' => 'required',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required',
            'status' => 'required',
            'project_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate project images
        ]);

        // Handle the thumbnail image
        if ($request->hasFile('thumbnail_image')) {
            // Remove old thumbnail if exists
            if ($news->thumbnail_image) {
                \Storage::disk('public')->delete($news->thumbnail_image);
            }

            // Store new thumbnail
            $thumbnailImage = $request->file('thumbnail_image')->store('news_images', 'public');
        } else {
            $thumbnailImage = $news->thumbnail_image; // Keep old thumbnail if no new image is uploaded
        }

        // Handle multiple project images
        $projectImages = $news->project_images ?? []; // Keep existing images if no new ones are uploaded
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $path = $image->store('news_images', 'public');
                $projectImages[] = $path;
            }
        }

        // Update the news entry
        $news->update([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'content' => $request->input('content'),
            'author' => $request->input('author'),
            'status' => $request->input('status'),
            'thumbnail_image' => $thumbnailImage,
            'project_images' => $projectImages,
        ]);

        // Redirect back with success message
        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }


    public function destroy($id)
    {
        // Find the news by ID
        $news = News::findOrFail($id);

        // Delete the thumbnail image from storage
        if ($news->thumbnail_image) {
            \Storage::disk('public')->delete($news->thumbnail_image);
        }

        // Delete the project images from storage
        if ($news->project_images) {
            foreach ($news->project_images as $image) {
                \Storage::disk('public')->delete($image);
            }
        }

        // Delete the news record from the database
        $news->delete();

        // Redirect back with success message
        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
    public function showByCategory($category)
    {
        // Find the category by its slug or ID
        $category = Category::where('slug', $category)->firstOrFail();

        // Fetch the news that belong to this category
        $news = News::where('category_id', $category->id)->get();

        // Pass the category and news to the view
        return view('frontend.news', compact('news', 'category'));
    }
    public function show($slug)
    {
        // Fetch the news details by slug
        $news = News::where('slug', $slug)->firstOrFail();

        // Fetch related news (for example, by category or recent)
        $relatedNews = News::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id) // Exclude the current news
            ->latest()
            ->take(3)
            ->get();

        // Fetch categories and recent news for sidebar
        $categories = Category::withCount('news')->get();
        $recentNews = News::latest()->take(5)->get();

        // Return the view with the news details and other necessary data
        return view('frontend.news-details', compact('news', 'categories', 'recentNews', 'relatedNews'));
    }


}
