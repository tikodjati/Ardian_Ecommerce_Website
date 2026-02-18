<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::with(['category','images'])->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::where('is_active', true)->get();
        $collections = Collection::where('is_active', true)->get();
        $materials = Material::all();

        return view('admin.products.create', compact(
            'categories',
            'collections',
            'materials'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);

        DB::transaction(function() use ($request) {

            $product = Product::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'is_featured' => $request->has('is_featured'),
                'is_new_arrival' => $request->has('is_new_arrival'),
                'is_active' => $request->has('is_active'),
            ]);

            // Upload Images
            if($request->hasFile('images')) {
                foreach($request->file('images') as $index => $image) {

                    $path = $image->store('products', 'public');

                    $product->images()->create([
                        'image_url' => $path,
                        'is_primary' => $index == 0,
                        'sort_order' => $index
                    ]);
                }
            }

            // Sync Collections
            if($request->collections) {
                $product->collections()->sync($request->collections);
            }

            // Sync Materials
            if($request->materials) {
                $product->materials()->sync($request->materials);
            }
        });

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        $collections = Collection::all();
        $materials = Material::all();

        return view('admin.products.edit', compact(
            'product',
            'categories',
            'collections',
            'materials'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        DB::transaction(function() use ($request, $product) {

            $product->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'is_featured' => $request->has('is_featured'),
                'is_new_arrival' => $request->has('is_new_arrival'),
                'is_active' => $request->has('is_active'),
            ]);

            // Upload new images
            if($request->hasFile('images')) {
                foreach($request->file('images') as $index => $image) {

                    $path = $image->store('products', 'public');

                    $product->images()->create([
                        'image_url' => $path,
                        'is_primary' => false,
                        'sort_order' => $index
                    ]);
                }
            }

            // Sync pivot tables
            $product->collections()->sync($request->collections ?? []);
            $product->materials()->sync($request->materials ?? []);
        });

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        // Hapus file gambar
        foreach($product->images as $image) {
            Storage::disk('public')->delete($image->image_url);
        }

        $product->delete();

        return redirect()->route('products.index');
    }
}
