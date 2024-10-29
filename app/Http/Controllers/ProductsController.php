<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use League\CommonMark\Delimiter\Processor\DelimiterProcessorInterface;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:60',
            'product_description' => 'required|string|max:255',
            'inStock' => 'required|integer',
            'price' => 'required|string|',

        ]);
        Products::create([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'inStock' => $request->inStock,
            'price' => $request->price,
        ]);
        return redirect()->route('products.index')
            ->with('success', 'Item created successfully.');
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
        return view('products.edit', compact('product'));
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
            'price' => 'required|string|',
        ]);

        $product-> update($request->all());

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
