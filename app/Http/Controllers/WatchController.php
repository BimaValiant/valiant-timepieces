<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index(Request $request)
    {
        $query = Watch::query();

        // 1. Pencarian (Brand, Nama Model, atau Referensi)
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('brand', 'like', "%{$search}%")
                  ->orWhere('model_name', 'like', "%{$search}%")
                  ->orWhere('reference_number', 'like', "%{$search}%");
            });
        }

        // 2. Filter Berdasarkan Brand
        if ($request->filled('brand') && $request->brand !== 'ALL BRANDS' && $request->brand !== 'ALL') {
            $query->where('brand', strtoupper($request->brand));
        }

        // 3. Filter Berdasarkan Kondisi
        if ($request->filled('condition') && $request->condition !== 'ANY CONDITION') {
            $query->where('condition', strtoupper($request->condition));
        }

        // 4. Pengurutan / Sorting
        if ($request->filled('sort')) {
            if ($request->sort === 'price_low') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort === 'price_high') {
                $query->orderBy('price', 'desc');
            } else {
                $query->latest();
            }
        } else {
            $query->latest();
        }

        $watches = $query->get();

        return view('welcome', compact('watches'));
    }

    public function show($id)
    {
        $watch = Watch::findOrFail($id);
        return view('show', compact('watch'));
    }
}