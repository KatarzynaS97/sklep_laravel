<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Models\Tshirt;
use App\Models\Trousers;
use App\Models\Socks;
use App\Models\Shirt;
use App\Models\Cart_items;
use App\Http\Controllers\ProductsController;
use App\Models\Underwear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $productType, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $productModel = $this->getProductModel($productType);
            $product = $productModel::find($id);

            if (!$product) {
                return redirect()->back()->withErrors(['error' => 'Product nie znaleziony']);
            }

            $cart = new Cart_items();
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->product_type = $productType;
            $cart->product_id = $id;
            // $cart->product_title = $product->name;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();

            return redirect()->back()->with('message', "Produkt dodany do koszyka!");
        } else {
            return redirect('login');
        }
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
            case 'shirt':
                return Shirt::class;
            case 'underwear':
                return Underwear::class;
            case 'socks':
                return Socks::class;
            default:
                abort(404, 'Invalid product type');
        }
    }

    
    // public function addToCart(Request $request, $productType, $productId)
    // {
    //     if(Auth::id())
    //     {
    //         $user = auth()->user();
    //         $cart = new cart;
    //         $product= ProductsController::find($productId);
    //         $cart->name = $user->name;
    //         $cart->email = $user->name;
    //         $cart->product_type ='dress';
    //         $cart->product_id=$product->id;
    //     }
    //     $productModel = $this->getProductModel($productType);
    //     $product = $productModel::findOrFail($productId);

    //     $cartItem = Cart::where('product_type', $productType)
    //         ->where('product_id', $productId)
    //         ->first();

    //     if ($cartItem) {
    //         $cartItem->quantity += 1;
    //     } else {
    //         $cartItem = new Cart();
    //         $cartItem->product_type = $productType;
    //         $cartItem->product_id = $productId;
    //         $cartItem->quantity = 1;
    //     }

    //     $cartItem->save();

    //     return response()->json([
    //         'message' => 'Produkt dodany do koszyka',
    //         'cartItem' => $cartItem
    //     ]);
    // }

    // public function viewCart()
    // {
    //     $cartItems = Cart::with('product')->get();

    //     return response()->json([
    //         'cartItems' => $cartItems
    //     ]);
    // }

    // private function getProductModel($productType)
    // {
    //     switch ($productType) {
    //         case 'dress':
    //             return Dress::class;
    //         case 'tshirt':
    //             return Tshirt::class;
    //         case 'trousers':
    //             return Trousers::class;
    //             case 'shirt':
    //                 return Shirt::class;
    //                 case 'underwear':
    //                     return Underwear::class;
    //         case 'socks':
    //             return Socks::class;
    //         default:
    //             abort(404, 'Invalid product type');
    //     }
    // }
}

