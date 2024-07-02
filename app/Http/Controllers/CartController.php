<?php namespace App\Http\Controllers;

use App\Models\Dress;
use App\Models\Tshirt;
use App\Models\Trousers;
use App\Models\Socks;
use App\Models\Shirt;
use App\Models\Cart_items;
use Illuminate\Support\Facades\Session;
use App\Models\Underwear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function addToCart(Request $request, $productType, $id)
    {$validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1',
        // inne reguły walidacji
    ]);
        
        $productModel = $this->getProductModel($productType);
        $product = $productModel::find($id);

        if (!$product) {
            return redirect()->back()->withErrors(['error' => 'Produkt nie znaleziony']);
        }

        if (Auth::check()) {
            $user = auth()->user();

            $cart = Cart_items::where('user_id', $user->id)
                ->where('product_type', $productType)
                ->where('product_id', $id)
                ->first();

            if ($cart) {
                $cart->quantity += $request->quantity;
            } else {
                $cart = new Cart_items();
                $cart->user_id = $user->id;
                $cart->product_type = $productType;
                $cart->product_title = $product->name;
                $cart->email = $user->email;
                $cart->product_id = $id;
                $cart->price = $product->price;
                $cart->quantity = $request->quantity;
                $cart->name = $product->name;
            }
            if (!$cart->save()) {
            Log::error('Nie udało się zapisać do bazy danych: ', $cart->toArray());
                return redirect()->back()->withErrors(['error' => 'Nie udało się dodać do koszyka']);
            }
        } else {
            $cart = session()->get('cart', []);
            $cartItemKey = $productType . '_' . $id;

            if (isset($cart[$cartItemKey])) {
                $cart[$cartItemKey]['quantity'] += $request->quantity;
            } else {
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

        return redirect()->back()->with('message', 'Produkt dodany do koszyka!');
    }

    public function updateCart(Request $request, $productType, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $cartItem = Cart_items::where('user_id', $user->id)
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
            Cart_items::where('user_id', $user->id)
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
    }

    public function viewCart()
    {
        $user = auth()->user();

        if ($user) {
            $cartItems = Cart_items::where('user_id', $user->id)->get();
        } else {
            $cart = session()->get('cart', []);
            $cartItems = [];

            foreach ($cart as $item) {
                $cartItems[] = (object) $item;
            }
        }

        return view('cart.view', compact('cartItems'));
    }
}
