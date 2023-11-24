<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //index page

        // pass data from the database


        //Create our product
        $products = Product::create([
            "name" => 'Shirts',
            'description' => 'A sample shirt',
            'price' => 100,

        ]);

        // $products = Product::all();
        // dump($products);
        $products = Product::orderBy("created_at", "desc")->get();

        return view("products.index", [
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    //index page

    // pass data from the database
    public function store(Request $request)
    {
        //
        //Create out product
        Product::create([
            "name" => 'Shoes',
            'descriprion' => 'A sample product',
            'price' => 200,

        ]);

        // redirect to the index
        return redirect()->route('products.index')->with('success', 'Created The product');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
