<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->paginate(5);
        return view('categories.index',compact('categories'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|alpha'
        ]);
        Category::create($request->all());
        return redirect()->route('categories.index')
            ->with('success','Category created successfully.');

    }

    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|alpha'
        ]);
        $category->update($request->all());
        return redirect()->route('categories.index')
            ->with('success','Category updated successfully');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
            ->with('success','Category deleted successfully');
    }

}
