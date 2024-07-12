<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all();
        $totalPrice = $this->calculateTotalPrice($cartItems);
        $deliveryPrice = session()->get('deliveryPrice', 0);

        return view('cart.view', compact('cartItems', 'totalPrice', 'deliveryPrice'));
    }

    public function add(Request $request, $category_id, $id)
    { 
         if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Aby dodać produkt do koszyka, musisz być zalogowany.');
    }

    $product = Product::findOrFail($id);
    $category = Category::findOrFail($category_id);
    $user = auth()->user();

    if (!$user->id) {
        return redirect()->route('login')->with('error', 'Błąd w autoryzacji');
    }


        $cartItem = CartItem::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'category_id' => $category->id,
            'product_type' => $category->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
        ]);
    
        return redirect()->route('cart.index')->with('message', 'Produkt został dodany do koszyka.');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $cartItem->update([
            'quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('message', 'Ilość produktu została zaktualizowana.');
    }

    public function destroy(CartItem $cartItem)
    {
        $cartItem->delete();

        return redirect()->back()->with('message', 'Produkt został usunięty z koszyka.');
    }

    public function updateDelivery(Request $request)
    {
        $cartItemId = $request->input('cart_item_id');
        $selectedOption = $request->input('delivery_option');
    
        $cartItem = CartItem::find($cartItemId);
    
        if ($cartItem) {
            $cartItem->update([
                'delivery_option' => $selectedOption,
            ]);
    
            $deliveryPrice = 0;
            switch ($selectedOption) {
                case 1:
                    $deliveryPrice = 25;
                    break;
                case 2:
                    $deliveryPrice = 20;
                    break;
                case 3:
                    $deliveryPrice = 15;
                    break;
                case 4:
                    $deliveryPrice = 12;
                    break;
                default:
                    $deliveryPrice = 0;
                    break;
            }
    
            session(['deliveryPrice' => $deliveryPrice]);
    
            return redirect()->back()->with('message', 'Metoda dostawy została zaktualizowana.');
        }
    
        return redirect()->back()->withErrors(['error' => 'Nie można znaleźć pozycji w koszyku.']);
    }
    protected function calculateTotalPrice($cartItem)
    {
        return $cartItem->sum(function ($item) {
            return $item->price * $item->quantity;
        });
    }
}
