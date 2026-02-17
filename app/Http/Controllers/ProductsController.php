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
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255|min:3',
            'price'=>'required|min:0',
            'description'=>'string'
        ]);
       Product::create($validated);
        return redirect('/shop')->with('success','Товар збережено');
    }
}
