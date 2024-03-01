<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

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
        $jobs = Job::all(); // Récupérer tous les emplois depuis le modèle Job
        return view('entreprise', ['jobs' => $jobs]); // Passer les emplois à la vue entreprise
    }

    public function autos()
    {
        return view('autos');
    }

    public function immobilier()
    {
        return view('immobilier');
    }
}
