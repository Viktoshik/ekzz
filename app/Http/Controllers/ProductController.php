<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', compact('products', 'categories'));
    }
    public function create(){
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }
    public function store(Request $request){
        Product::query()->create([
            'name'=> $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->cat,
        ]);
        return redirect('/products');
    }
    public function edit(Product $product){
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }
    public function update(Request $request, Product $product){
        $product->update([
            'name'=> $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->cat,
        ]);
        return redirect('/products');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect('/products');
    }
}
