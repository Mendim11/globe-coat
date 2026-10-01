<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Navbar;
use Illuminate\Support\Str;
class PageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();  
        return view('frontend.page', compact('page'));  // Return the 'frontend.page' view with page details
    }


    // Show the form for creating a new page
    public function create()
    {
        // Fetch all navbar items to populate the dropdown
        $navbars = Navbar::all(); // Make sure this is working

        // Pass the navbar items to the view
        return view('admin.pages.create', compact('navbars'));
    }


    // Store a new page and its sections in the database
    public function store(Request $request)
    {
        dd($request->all());
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'navbar_id' => 'required|exists:navbars,id',
            'section_one_title' => 'nullable|string',
            'section_one_content' => 'nullable|string',
            'section_two_title' => 'nullable|string',
            'section_two_content' => 'nullable|string',
            'how_it_works_title' => 'nullable|string',
            'how_it_works_content' => 'nullable|string',
        ]);

        // Store the page data including individual section fields
        Page::create([
            'title' => $request->title,
            'navbar_id' => $request->navbar_id,
            'slug' => Str::slug($request->title), // Generate slug from title

            // Store each section in its respective field
            'section_one_title' => $request->section_one_title,
            'section_one_content' => $request->section_one_content,
            'section_two_title' => $request->section_two_title,
            'section_two_content' => $request->section_two_content,
            'how_it_works_title' => $request->how_it_works_title,
            'how_it_works_content' => $request->how_it_works_content,
        ]);

        // Redirect with a success message
        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully!');
    }



    // Show a preview of the page before publishing
    public function preview($id)
    {
        $page = Page::findOrFail($id);
        return view('frontend.page-preview', compact('page'));
    }

    // Show all pages
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    // Edit a page
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    // Update an existing page
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'navbar_id' => 'required|exists:navbars,id',
            'section_one_title' => 'nullable|string',
            'section_one_content' => 'nullable|string',
            'section_two_title' => 'nullable|string',
            'section_two_content' => 'nullable|string',
            'how_it_works_title' => 'nullable|string',
            'how_it_works_content' => 'nullable|string',
        ]);

        $page = Page::findOrFail($id);
        $page->update([
            'title' => $request->title,
            'navbar_id' => $request->navbar_id,
            'section_one_title' => $request->section_one_title,
            'section_one_content' => $request->section_one_content,
            'section_two_title' => $request->section_two_title,
            'section_two_content' => $request->section_two_content,
            'how_it_works_title' => $request->how_it_works_title,
            'how_it_works_content' => $request->how_it_works_content,
            'slug' => Str::slug($request->title),
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully!');
    }



    // Delete a page
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('page.index')->with('success', 'Page deleted successfully.');
    }
}
