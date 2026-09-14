<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::all();
        return view('welcome', compact('watches'));
    }

    public function show($id)
    {
        $watch = Watch::findOrFail($id);
        return view('show', compact('watch'));
    }
}