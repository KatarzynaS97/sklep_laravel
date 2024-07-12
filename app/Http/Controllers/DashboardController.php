<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all(); // Pobranie wszystkich elementów koszyka
        $totalPrice = $this->calculateTotalPrice($cartItems); // Obliczenie całkowitej ceny koszyka
        $deliveryPrice = session()->get('deliveryPrice', 0); // Pobranie ceny dostawy z sesji

        // Obliczenie sumy koszyka i ceny dostawy
        $totalAmount = $totalPrice + $deliveryPrice;

        return view('dashboard', compact('cartItems', 'totalAmount'));
    }

    protected function calculateTotalPrice($cartItems)
    {
        return $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });
    }
}

