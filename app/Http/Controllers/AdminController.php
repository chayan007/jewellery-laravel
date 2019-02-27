<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
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

    public function getAgents()
    {
        $agents = User::paginate(20);
        return view('admin.Agents', ['agents' => $agents]);
    }
}
