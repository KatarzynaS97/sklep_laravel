<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Models\Tshirt;
use App\Models\Trousers;
use App\Models\Socks;
use App\Models\Shirt;
use App\Models\Cart_items;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Session;
use App\Models\Underwear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $productType, $id)
    {
        $productModel = $this->getProductModel($productType);
        $product = $productModel::find($id);

        if (!$product) {
            return redirect()->back()->withErrors(['error' => 'Produkt nie znaleziony']);
        }
        if (Auth::id()) {
            //zalogowany
            $user = auth()->user();
           
            $cart = Cart_items::where('email', $user->email)
            ->where('product_type', $productType)
            ->where('product_id', $id)
            ->first();
            if ($cart) {
                // Jeśli produkt już istnieje w koszyku, zaktualizuj ilość
                $cart->quantity += $request->quantity;
            } else {
                // Jeśli produkt nie istnieje w koszyku, dodaj nowy

            $cart = new Cart_items();
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->product_type = $productType;
            $cart->product_id = $id;
            // $cart->product_title = $product->name;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            }
            $cart->save();
        } else {
            //nie  zalogowany
            $cart = session()->get('cart', []);
    
            // Sprawdź, czy produkt już istnieje w koszyku
            $cartItemKey = $productType . '_' . $id;
    
            if (isset($cart[$cartItemKey])) {
                // Jeśli produkt już istnieje w koszyku, zaktualizuj ilość
                $cart[$cartItemKey]['quantity'] += $request->quantity;
            } else {
                // Jeśli produkt nie istnieje w koszyku, dodaj nowy
                $cart[$cartItemKey] = [
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $request->quantity,
                    'product_type' => $productType,
                    'product_id' => $id,
                ];
            }
    
            session()->put('cart', $cart);
        }
    
        return redirect()->back()->with('message', "Produkt dodany do koszyka!");
    }

        public function updateCart(Request $request, $productType, $id)
        {
            if (Auth::id()) {
                $user = auth()->user();
                $cartItem = Cart_items::where('email', $user->email)
                    ->where('product_type', $productType)
                    ->where('product_id', $id)
                    ->first();
    
                if ($cartItem) {
                    $cartItem->quantity = $request->quantity;
                    $cartItem->save();
                }
            } else {
                $cart = session()->get('cart', []);
                $cartItemKey = $productType . '_' . $id;
    
                if (isset($cart[$cartItemKey])) {
                    $cart[$cartItemKey]['quantity'] = $request->quantity;
                    session()->put('cart', $cart);
                }
            }
    
            return redirect()->route('cart.view')->with('message', 'Koszyk zaktualizowany!');
        }
    
        public function removeFromCart($productType, $id)
        {
            if (Auth::id()) {
                $user = auth()->user();
                Cart_items::where('email', $user->email)
                    ->where('product_type', $productType)
                    ->where('product_id', $id)
                    ->delete();
            } else {
                $cart = session()->get('cart', []);
                $cartItemKey = $productType . '_' . $id;
    
                if (isset($cart[$cartItemKey])) {
                    unset($cart[$cartItemKey]);
                    session()->put('cart', $cart);
                }
            }
    
            return redirect()->route('cart.view')->with('message', 'Produkt usunięty z koszyka!');
        }
    

    protected function getProductModel($productType)
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
        
        // $models = [
        //     'dress' => \App\Models\Dress::class,
        //     'trousers' => \App\Models\Trousers::class,
        //     'shirt' => \App\Models\Shirt::class,
        //     'tshirt' => \App\Models\Tshirt::class,
        //     'socks' => \App\Models\Socks::class,
        //     'underwear' => \App\Models\Underwear::class,
        // ];
    
        // return $models[$productType] ?? null;

    }
        public function viewCart()
    {
        if (Auth::id()) {
            $user = auth()->user();
            $cartItems = Cart_items::where('email', $user->email)->get();
        } else {
            $cartItems = session()->get('cart', []);
        }

        return view('layout/cart', compact('cartItems'));
    }


    // public function viewCart()
    // {
    //     $cartItems = Cart::with('product')->get();

    //     return response()->json([
    //         'cartItems' => $cartItems
    //     ]);
    // }
}

