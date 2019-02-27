<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contactUs(Request $request)
    {

    }

    public function shop()
    {
        $products = Product::paginate(20);
        $categories = Category::all();
        return view('public.pages.shop', ['products' => $products, 'categories' => $categories]);
    }

    public function shopByCategory($category)
    {
        $cat_id = Category::where('category', $category)->first()->id;
        $products = Product::where('category', $cat_id)->paginate(20);
        $categories = Category::all();
        return view('public.pages.shop', ['products' => $products, 'categories' => $categories]);
    }

    public function getProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('public.pages.single', ['product' => $product]);
    }
}
