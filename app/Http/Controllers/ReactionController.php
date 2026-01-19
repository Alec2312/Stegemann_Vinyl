<?php

namespace App\Http\Controllers;

use App\Models\Vinyl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReactionController extends Controller
{
    public function store(Request $request, Vinyl $vinyl)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $vinyl->reactions()->create([
            'user_id' => Auth::id(),
            'message' => $request->message,
        ]);

        return back()->with('success', 'Reactie geplaatst!');
    }
}
