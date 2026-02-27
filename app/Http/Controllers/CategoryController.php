<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            ],[
                'name.required'=>'Это поле обязательное',
                'name.min'=>'Название должно содержать не менее 3 символов'
            ]
        );
        Category::query()->create([
            'name'=> $request->name,
        ]);
        return redirect('/categories');
    }
    public function edit(Category $category){
        return view('categories.edit', ['category' => $category]);
    }
    public function update(Request $request, Category $category){
        $request->validate([
            'name' => 'required|min:3',
        ],[
                'name.required'=>'Это поле обязательное',
                'name.min'=>'Название должно содержать не менее 3 символов'
            ]
        );
        $category->update([
            'name'=>$request->name,
        ]);
        return redirect('/categories');
    }
    public function destroy(Category $category){
        $category->delete();
        return redirect('/categories');
    }
}
