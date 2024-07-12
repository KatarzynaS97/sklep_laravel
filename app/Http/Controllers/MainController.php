<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $randomProducts = [];

        foreach ($categories as $category) {
            $products = Product::where('category_id', $category->id)
                               ->inRandomOrder()
                               ->take(2)
                               ->get();

            $randomProducts[$category->name] = $products;
        }

        return view('headers.welcome', compact('categories', 'randomProducts'));
    }
}
