<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\ProdCats;
use Illuminate\Http\Request;
use League\CommonMark\Delimiter\Processor\DelimiterProcessorInterface;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::whereNull('deleted_at')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('products.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'product_name' => 'required|string|max:60',
            'product_description' => 'required|string|max:255',
            'inStock' => 'required|integer',
            'price' => 'required|string',
            'categories' => 'required|array',
            'categories.*' => 'integer|exists:categories,id'
        ]);

        // Create the product and save it to a variable
        $product = Products::create([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'inStock' => $request->inStock,
            'price' => $request->price,
        ]);

        // Loop through each selected category and insert into ProdCats
        foreach ($request->categories as $id) {
            ProdCats::create([
                'product_id' => $product->id,  // Use the product's ID from the newly created product
                'category_id' => $id,
            ]);
        }

        // Redirect to the products index page with a success message
        return redirect()->route('products.index')
            ->with('success', 'Item created successfully with categories.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product =Products::findOrFail($id);
        $categories = Categories::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::findOrFail($id);

        $request->validate([
            'product_name' => 'required|string|max:60',
            'product_description' => 'required|string|max:255',
            'inStock' => 'required|integer',
            'price' => 'required|string',
            'categories' => 'required|array',
            'categories.*' => 'integer|exists:categories,id'
        ]);


        $product->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'inStock' => $request->inStock,
            'price' => $request->price,
        ]);

        // Sync the categories in the ProdCats pivot table
        $product->categories()->sync($request->categories);

        return redirect()->route('products.index')
            ->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Entry deleted successfully.');
    }
}
