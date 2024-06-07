<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Tour;
use Firefly\FilamentBlog\Blog;
use Firefly\FilamentBlog\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getAllTours()
    {
        $tours = Tour::all();
        return view('tour.index', compact('tours'));
    }
    public function getContacts()
    {
        return view('contacts');
    }

    public function getBlog()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }
    public function showTours(Region $region)
    {
        $tours = $region->tours()->get();
        return view('tour.index', compact('tours', 'region'));
    }

    public function getAbout()
    {
        return view('about');
    }

}
