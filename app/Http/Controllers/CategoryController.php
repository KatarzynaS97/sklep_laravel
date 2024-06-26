<?php

namespace App\Http\Controllers;

    use App\Models\Shirt;
    use App\Models\Socks; 
    use App\Models\Trousers; 
    use App\Models\Tshirt; 
    use App\Models\Underwear; 
use App\Models\Dress;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showDresses()
    {
        $products = Dress::all();
        return view('headers/kategories_dress', compact('products'));
    }

    public function showShirts()
    {
        $products = Shirt::all();
        return view('headers/kategories_shirt', compact('products'));
    }

    public function showSocks()
    {
        $products = Socks::all();
        return view('headers/kategories_socks', compact('products'));
    }

    public function showTrousers()
    {
        $products = Trousers::all();
        return view('headers/kategories_trousers', compact('products'));
    }

    public function showTshirts()
    {
        $products = Tshirt::all();
        return view('headers/kategories_tshirt', compact('products'));
    }

    public function showUnderwear()
    {
        $products = Underwear::all();
        return view('headers/kategories_underwear', compact('products'));
    }
}
