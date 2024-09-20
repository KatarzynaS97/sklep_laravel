<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all(); 
        $totalPrice = $this->calculateTotalPrice($cartItems);
        $deliveryPrice = session()->get('deliveryPrice', 0); 
        $totalAmount = $totalPrice + $deliveryPrice;
        $isAdmin = false; // Użytkownik nie jest adminem

        return view('user.dashboard', compact('cartItems', 'totalAmount', 'isAdmin'));
    }
    protected function calculateTotalPrice($cartItems)
    {
        return $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });
    }
}
