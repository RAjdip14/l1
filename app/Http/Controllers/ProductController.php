<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',['myProduct' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect()->to('/products');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',['myProduct'=> $product]);
    }
    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect()->to('/products');
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',['myProduct' => $product]);
    }

}
