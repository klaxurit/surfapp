<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Http\Request;



class SpotController extends Controller
{
    public function index()
    {
        $spots = Spot::all();

        return view('allspots.index', [
            'spots' => $spots
        ]);
    }

    public function show(Spot $id)
    {
        
        return view('allspots.show', [
            'spot' => $id
        ]);
    }

}
