<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function reglement()
    {
        return view('reglement');
    }

    public function entreprise()
    {
        return view('entreprise');
    }

    public function auto()
    {
        return view('auto');
    }

    public function immobilier()
    {
        return view('immobilier');
    }
}
