<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
        $category_id = Category::pluck('id');
        return view('products.create',compact('category_id'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);
        Product::create($request->all());

        return redirect()->route('products.index')->with('success','Product created successfully.');
    }

    public function show(Product $product){
        return view('products.show',compact('product'));
    }

    public function edit(Product $product){
        $category_id = Category::pluck('id');
        return view('products.edit',compact('product'),compact('category_id'));
    }

    public function update(Product $product,Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' =>'required'
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','Product updated successfully.');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index')
            ->with('success','Product deleted successfully.');
    }



}
