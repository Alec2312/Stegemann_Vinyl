<?php

namespace App\Http\Controllers;

use App\Models\Vinyl;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $items = Auth::user()->cartItems()->with('vinyl')->get();
        $total = $items->sum(fn($item) => $item->vinyl->price * $item->quantity);

        return view('cart.index', compact('items', 'total'));
    }

    public function add(Vinyl $vinyl)
    {
        $cartItem = Auth::user()->cartItems()->where('vinyl_id', $vinyl->id)->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            Auth::user()->cartItems()->create([
                'vinyl_id' => $vinyl->id,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Added to cart!');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $request->validate([
            'action' => 'required|in:increase,decrease'
        ]);

        if ($request->action === 'increase') {
            $cartItem->increment('quantity');
        } elseif ($request->action === 'decrease') {
            if ($cartItem->quantity > 1) {
                $cartItem->decrement('quantity');
            } else {
                $cartItem->delete();
            }
        }

        return back()->with('success', 'Quantity updated!');
    }

    public function remove(CartItem $cartItem)
    {
        $cartItem->delete();
        return back()->with('success', 'Item removed.');
    }
}
