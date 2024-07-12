<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function aboutUs()
    {
        return view('headers.aboutus');
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $viewName = "headers.kategories_{$slug}";

        if (!view()->exists($viewName)) {
            abort(404);
        }

        return view($viewName, compact('category'));
    }
    public function contact()
{
    return view('footer.contact');
}



public function shoppingPrices()
{
    return view('footer.shopping_prices');
}

public function exchange()
{
    return view('footer.exchange');
}

public function cookies()
{
    return view('footer.cookies');
}

public function sizeTables()
{
    return view('footer.size_tables');
}

public function statute()
{
    return view('footer.statute');
}
}


