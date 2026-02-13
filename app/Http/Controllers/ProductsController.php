<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function catalog()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }
}
