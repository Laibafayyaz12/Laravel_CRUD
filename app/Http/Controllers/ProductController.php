<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    // Show form
    public function create()
    {
        return view('create');
    }

    // Store data
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/');
    }

    // Edit form
    public function edit($id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/');
    }

    // Delete
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/');
    }
}