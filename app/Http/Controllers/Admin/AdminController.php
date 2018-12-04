<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;



class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $user=User::find(2);
        return view('admin.index')
        ->with('products', $products);
    }
}
