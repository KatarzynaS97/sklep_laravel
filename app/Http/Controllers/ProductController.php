<?php

namespace App\Http\Controllers;
;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show($id)
    {

        $product = Product::find($id);

        
        if (!$product) {
            return redirect()->route('products.index')->with('message', 'Product not found');
        }

        return view('categories.show', compact('product'));
    }
    public function index()
    {
        $category = Category::first();
        $products = Product::all(); 

        return view('products.index', compact('category', 'products'));
    }



    public function index2(Category $category)
    {
        $products = $category->products; 

        return view('products.index', compact('category', 'products'));
    }

    public function show3($id)
    {
        $product = Product::findOrFail($id); 

        return view('products.show', compact('product'));
    }
   

       
    
}
