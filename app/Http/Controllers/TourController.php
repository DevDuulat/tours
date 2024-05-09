<?php

namespace App\Http\Controllers;

use App\Models\Tour;

class TourController extends Controller
{
    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tour.show', compact('tour'));
    }
}
