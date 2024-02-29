<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function exemple1()
    {
        return view('exemple1');
    }

    public function exemple2()
    {
        return view('exemple2');
    }
}
