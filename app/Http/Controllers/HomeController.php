<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Tour;

use Firefly\FilamentBlog\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $latestTours = Tour::latest()->take(3)->with('region')->get();
        $latestNews = Post::all();
        $regions = Region::all();
        return view('home', compact('latestTours','latestNews' ,'regions'));
    }
}
