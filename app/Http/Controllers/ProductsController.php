<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = \App\Models\Category::all();
        return view('add', compact('categories'));
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255|min:3',
            'price'=>'required|min:0',
            'description'=>'string',
            'category_id'=>'exists:categories,id'
        ]);
       Product::create($validated);
        return redirect('/shop')->with('success','Товар збережено');
    }
    public function view($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('product', compact('product','categories'));
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'=>'required|max:255|min:3',
            'price'=>'required|min:0',
            'description'=>'string',
            'category_id'=>'exists:categories,id'
        ]);
        $product = Product::findOrFail($id);
        $product->update($validated);

        return redirect('/shop')->with('success','Товар оновлено');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/shop')->with('success','Товар видалено');
    }
}
