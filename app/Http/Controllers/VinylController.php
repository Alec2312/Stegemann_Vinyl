<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VinylController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vinyls = \App\Models\Vinyl::all();
        return view('vinyls.index', compact('vinyls'));
    }

    public function shop()
    {
        $vinyls = \App\Models\Vinyl::where('is_official', true)->get();
        return view('vinyls.shop', compact('vinyls'));
    }

    public function marktplaats()
    {
        $vinyls = \App\Models\Vinyl::where('is_official', false)->get();
        return view('vinyls.marktplaats', compact('vinyls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vinyls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'description' => 'required',
            'is_official' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $imagePath = $request->file('image')->store('vinyls', 'public');

        \App\Models\Vinyl::create([
            'user_id' => auth()->id(),
            'title' => $validated['title'],
            'year' => $validated['year'],
            'description' => $validated['description'],
            'is_official' => $validated['is_official'],
            'price' => $validated['price'],
            'image' => $imagePath,
        ]);

        return redirect()->route('vinyls.marktplaats')->with('success', 'Vinyl toegevoegd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vinyl = \App\Models\Vinyl::findOrFail($id);
        return view('vinyls.show', compact('vinyl'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
