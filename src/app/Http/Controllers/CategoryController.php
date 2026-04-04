<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('category', compact('categories'));}

    public function store(CategoryRequest $request)
    {
        $categories = $request->only(['name']);
        Category::create($categories);
        return redirect('/categories')->with('message','カテゴリーを追加しました');
    }
    public function update(CategoryRequest $request)
    {
        $name = $request->input('name');
        $id = $request->input('id');
        $category = Category::find($id);
        $category->name = $name;
        $category->save();

        return redirect('/categories')->with('message','カテゴリーを更新しました');
    }
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $category = Category::find($id);
        $category->delete();

        return redirect('/categories')->with('message','カテゴリーを削除しました');

    }
}
