<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminWatchController extends Controller
{
    public function index()
    {
        $watches = Watch::latest()->get();
        return view('admin.index', compact('watches'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model_name' => 'required',
            'price' => 'required|numeric',
            'condition' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('watches', 'public');

        Watch::create([
    'brand' => strtoupper($request->brand),
    'model_name' => $request->model_name,
    'reference_number' => $request->reference_number,
    'year' => $request->year,
    'price' => $request->price,
    'condition' => $request->condition,
    'status' => $request->status ?? 'AVAILABLE',
    'badge' => $request->badge ?? 'VERIFIED',
    'image' => asset('storage/' . $imagePath),
    'case_size' => $request->case_size ?? '38 mm',
    'movement' => $request->movement ?? 'Automatic',
    'glass' => $request->glass ?? 'Sapphire Crystal',
    'completeness' => $request->completeness ?? 'Full Set (Box & Papers)',
]);

        return redirect()->route('admin.watches.index')->with('success', 'Jam tangan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $watch = Watch::findOrFail($id);
        return view('admin.edit', compact('watch'));
    }

    public function update(Request $request, $id)
    {
        $watch = Watch::findOrFail($id);

        $request->validate([
            'brand' => 'required',
            'model_name' => 'required',
            'price' => 'required|numeric',
            'condition' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imageUrl = $watch->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('watches', 'public');
            $imageUrl = asset('storage/' . $imagePath);
        }

        $watch->update([
    'brand' => strtoupper($request->brand),
    'model_name' => $request->model_name,
    'reference_number' => $request->reference_number,
    'year' => $request->year,
    'price' => $request->price,
    'condition' => $request->condition,
    'status' => $request->status ?? 'AVAILABLE',
    'badge' => $request->badge,
    'image' => $imageUrl,
    'case_size' => $request->case_size,
    'movement' => $request->movement,
    'glass' => $request->glass,
    'completeness' => $request->completeness,
]);

        return redirect()->route('admin.watches.index')->with('success', 'Data jam berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $watch = Watch::findOrFail($id);
        $watch->delete();

        return redirect()->route('admin.watches.index')->with('success', 'Jam tangan berhasil dihapus!');
    }
}