<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function entreprise()
    {
        $jobs = Job::all(); // Récupérer tous les emplois depuis le modèle Job
        return view('entreprise', ['jobs' => $jobs]); // Passer les emplois à la vue entreprise
    }
}
