<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all() ;
        return response()->json(['message'=>'Success' , 'data'=>$products]);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
         return response()->json(['message' => 'Data Inserted' , 'data'=>$product]);
    }

    public function show(Product $product)
    {
        return response()->json(['message'=>'data Details' , 'data'=>$product]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json(['message'=>'data updated' , 'data'=>$product]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message'=>'data deleted' , 'data'=>$product]);
    }
}
