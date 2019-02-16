<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->old_price = $request->old_price;
        $product->new_price = $request->new_price;
        $product->days = $request->days;
        $product->in_stock = $request->in_stock;
        $product->slug = str_slug($product->name, '-');
        $product->category = $request->category;
        if ($request->hasFile('img1'))
        {
            $file = $request->img1;
            $path = $file->store('public/images/products');
            $product->img1 = $path;
        }
        if ($request->hasFile('img2'))
        {
            $file = $request->img2;
            $path = $file->store('public/images/products');
            $product->img2 = $path;
        }
        if ($request->hasFile('img3'))
        {
            $file = $request->img3;
            $path = $file->store('public/images/products');
            $product->img3 = $path;
        }
        return back()->with('status', 'Product has been added !');
    }

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();
        return back()->with('status', 'Product has been deleted !');
    }

    public function editProduct(Request $request, $id)
    {

    }

    public function showProducts()
    {

    }

    public function singleProduct($slug)
    {

    }

}
