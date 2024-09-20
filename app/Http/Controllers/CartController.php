<?php

namespace App\Http\Controllers;
use App\Models\DeliveryOption;

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
        $deliveryOptions = DeliveryOption::all();
        $totalWithDelivery = $totalPrice + $deliveryPrice;
        return view('cart.view', compact('cartItems', 'totalPrice', 'deliveryPrice', 'deliveryOptions','totalWithDelivery'));
    }

    public function add(Request $request, $category_id, $id)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Aby dodać produkt do koszyka, musisz być zalogowany.');
        }
    
        $product = Product::findOrFail($id);
        $category = Category::findOrFail($category_id);
        $user = auth()->user();
    
        $cartItem = CartItem::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'category_id' => $category->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->input('quantity'),
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
        $selectedOption = $request->input('delivery_option');
        $deliveryOption = DeliveryOption::find($selectedOption);
    
        if ($deliveryOption) {
            // Zapisz cenę dostawy i wybraną opcję w sesji
            session([
                'deliveryPrice' => $deliveryOption->price,
                'selectedDeliveryOption' => $selectedOption
            ]);
    
            return redirect()->back()->with('message', 'Metoda dostawy została zaktualizowana.');
        }
    
        return redirect()->back()->withErrors(['error' => 'Nie można znaleźć opcji dostawy.']);
    }
    protected function calculateTotalPrice($cartItem)
    {
        return $cartItem->sum(function ($item) {
            return $item->price * $item->quantity;
        });
    }
}
