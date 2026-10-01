<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        // Fetch all products with their categories
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        // Fetch all categories to populate the dropdown in the form
        $categories = ProductCategory::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created product in storage.
     */

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:product_categories,id',
            'description' => 'required|string',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'additional_information' => 'nullable|string',
        ]);

        // Handle the thumbnail image upload
        $thumbnailImagePath = null;
        if ($request->hasFile('thumbnail_image')) {
            $thumbnailImagePath = $request->file('thumbnail_image')->store('products/thumbnails', 'public');
        }

        // Handle the product images upload (multiple images)
        $productImages = [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $productImages[] = $image->store('products/images', 'public');
            }
        }

        // Check if there is valid additional information in JSON format
        $additionalInformation = null;
        if ($request->filled('additional_information')) {
            // Optionally decode the JSON string to ensure it's valid JSON
            $additionalInformation = json_encode(json_decode($request->additional_information, true));
        }

        // Create the product
        $product = new Product();
        $product->title = $request->title;
        $product->slug = Str::slug($request->title); // Generate slug from title
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->thumbnail_image = $thumbnailImagePath; // Save thumbnail path
        $product->product_images = json_encode($productImages); // Save product images as JSON
        $product->additional_information = $additionalInformation; // Save additional information (if provided)
        $product->save();

        // Redirect to the products index or return a response
        return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
    }


    /**
     * Display the specified product.
     */
    public function show($slug)
    {
        // Fetch the product by slug along with its category
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();

        // Check if the request is from the admin route or the frontend
        if (request()->is('globe-admin/*')) {
            // Admin route, show product details for the admin panel
            return view('admin.products.show', compact('product'));
        } else {
            // Frontend route, show product details in shop-details page
            return view('frontend.shop-details', compact('product'));
        }
    }

    public function shop(Request $request)
    {
        $sortOption = $request->get('orderby', 'menu_order');

        $query = Product::query()->with('category');

        switch ($sortOption) {
            case 'popularity':
                if (\Illuminate\Support\Facades\Schema::hasColumn('products', 'views')) {
                    $query->orderBy('views', 'desc');
                } else {
                    $query->orderBy('id');
                }
                break;
            case 'rating':
                if (\Illuminate\Support\Facades\Schema::hasColumn('products', 'average_rating')) {
                    $query->orderBy('average_rating', 'desc');
                } else {
                    $query->orderBy('id');
                }
                break;
            case 'date':
                $query->orderBy('created_at', 'desc');
                break;
            case 'price':
                if (\Illuminate\Support\Facades\Schema::hasColumn('products', 'price')) {
                    $query->orderBy('price', 'asc');
                } else {
                    $query->orderBy('id');
                }
                break;
            case 'price-desc':
                if (\Illuminate\Support\Facades\Schema::hasColumn('products', 'price')) {
                    $query->orderBy('price', 'desc');
                } else {
                    $query->orderBy('id');
                }
                break;
            default:
                $query->orderBy('id');
                break;
        }

        $products = $query->paginate(9)->withQueryString();
        $totalProducts = Product::count();

        return view('frontend.shop', compact('products', 'totalProducts', 'sortOption'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(string $id)
    {
        // Fetch the product and categories for the dropdown
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate product update form data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $id,
            'description' => 'required|string',
            'category_id' => 'required|exists:product_categories,id',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'size' => 'nullable|string',
            'thickness' => 'nullable|string',
        ]);

        // Fetch the product
        $product = Product::findOrFail($id);

        // Handle thumbnail image update
        if ($request->hasFile('thumbnail_image')) {
            // Delete the old thumbnail if exists
            if ($product->thumbnail_image) {
                Storage::disk('public')->delete($product->thumbnail_image);
            }
            // Upload the new thumbnail
            $product->thumbnail_image = $request->file('thumbnail_image')->store('products/thumbnails', 'public');
        }

        // Handle additional product images update
        if ($request->hasFile('product_images')) {
            // Delete old images if updating new ones
            if ($product->product_images) {
                foreach (json_decode($product->product_images, true) as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
            $newImages = [];
            foreach ($request->file('product_images') as $image) {
                $newImages[] = $image->store('products/images', 'public');
            }
            $product->product_images = json_encode($newImages);
        }

        // Update product data
        $product->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'size' => $request->input('size'),
            'thickness' => $request->input('thickness'),
        ]);

        // Redirect to the product list with success message
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(string $id)
    {
        // Fetch the product
        $product = Product::findOrFail($id);

        // Delete thumbnail image
        if ($product->thumbnail_image) {
            Storage::disk('public')->delete($product->thumbnail_image);
        }

        // Delete additional product images
        if ($product->product_images) {
            foreach (json_decode($product->product_images, true) as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        // Delete the product
        $product->delete();

        // Redirect back to the product list with success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
