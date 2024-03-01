<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
    public function index()
    {
        $autos = Auto::with('categories')->get();
        return view('auto.index', compact('autos'));
    }
}
