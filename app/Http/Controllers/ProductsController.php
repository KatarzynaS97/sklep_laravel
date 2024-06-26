<?php

namespace App\Http\Controllers;
use App\Models\Dress;
use App\Models\Trousers;
use App\Models\Socks;
use App\Models\Shirt;
use App\Models\Tshirt;
use App\Models\Underwear;


use App\Http\Controllers\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    // public function show($id)
    // {
    //     $product = Dress::find($id);

    //     if (!$product) {
    //         return redirect()->back()->withErrors(['error' => 'Product not found']);
    //     }

    //     return view('product1_sukienka', ['product' => $product]);
    // }
        public function showProduct($product_type, $category, $id)
        {
            if ($category == 'sukienka') {
                $product = Dress::find($id);
            } elseif ($category == 'spodnie') {
                $product = Trousers::find($id);
            } elseif ($category == 'shirt') {
                $product = Shirt::find($id);
            }elseif ($category == 'tshirt') {
                $product = Tshirt::find($id);
            }  elseif ($category == 'bielizna') {
                $product = Underwear::find($id);
            } elseif ($category == 'socks') {
                $product = Socks::find($id);
            } else {
                abort(404); // Jeśli kategoria nie istnieje, zwróć błąd 404
            }
    
            $viewName = "main.{$product_type}_{$category}";
            
            if (!view()->exists($viewName)) {
                abort(404); // Jeśli widok nie istnieje, zwróć błąd 404
            }
    
            return view($viewName, ['product' => $product]);
        }
        public function index($productType)
        {
            $productModel = $this->getProductModel($productType);
            $products = $productModel::all();
    
            return view('products', [
                'products' => $products,
                'productType' => $productType
            ]);
        }
    
        private function getProductModel($productType)
        {
            switch ($productType) {
                case 'dress':
                    return Dress::class;
                case 'tshirt':
                    return Tshirt::class;
                case 'trousers':
                    return Trousers::class;
                case 'socks':
                    return Socks::class;
                default:
                    abort(404, 'Invalid product type');
            }
        }

        // public function showProduct1($product_type, $category, $id)
        // {
        //     if ($category == 'sukienka') {
        //         $product = Dress::find($id);
        //     } elseif ($category == 'spodnie') {
        //         $product = Trousers::find($id);
        //     } else {
        //         abort(404); // Jeśli kategoria nie istnieje, zwróć błąd 404
        //     }
    
        //     $viewName = "main.{$product_type}_{$category}";
            
        //     if (!view()->exists($viewName)) {
        //         abort(404); // Jeśli widok nie istnieje, zwróć błąd 404
        //     }
    
        //     return view($viewName, ['product' => $product]);
        // }
    
}
