<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Auto;

class SiteController extends Controller
{
    public function index()
    {
        $playersCount = $this->getPlayersCount();
        return view('home', compact('playersCount'));
    }

    public function reglement()
    {
        $playersCount = $this->getPlayersCount();
        return view('reglement', compact('playersCount'));
    }

    public function entreprise()
    {
        $playersCount = $this->getPlayersCount();
        $jobs = Job::all();
        return view('entreprise', compact('playersCount', 'jobs'));
    }

    public function auto()
    {
        $playersCount = $this->getPlayersCount();
        $autos = Auto::with('categories')->get();
        return view('auto.index', compact('playersCount', 'autos'));
    }

    public function immobilier()
    {
        $playersCount = $this->getPlayersCount();
        return view('immobilier', compact('playersCount'));
    }

    // Autres méthodes...

    private function getPlayersCount()
    {
        $server_id = env('SERVER_ID');
        $url = "https://api.trackyserver.com/widget/index.php?id=" . $server_id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = json_decode(curl_exec($ch), true);
        curl_close($ch);
        return $result ? $result['playerscount'] : false;
    }
}

