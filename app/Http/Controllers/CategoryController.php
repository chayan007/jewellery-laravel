<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        return back()->with('status', 'Category has been added !');
    }

    public function updateCategory()
    {

    }

    public function getCategories()
    {
        $categories =  Category::paginate(20);
        return view('admin.Category', ['categories' => $categories]);
    }

    public function deleteCategory($id)
    {
        $category = Category::where('id', $id)->firstOrFail();
        $category->delete();
    }
}
