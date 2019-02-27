<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addProduct()
    {
        $categories = Category::all();
        return view('admin.addProduct', ['categories' => $categories]);
    }

    public function addCategory()
    {
        return view('admin.addCategory');
    }
}
