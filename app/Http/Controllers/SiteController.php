<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function getAllTours()
    {
        $tours = Tour::all(); // Получаем все туры из базы данных
        return view('tour.index', compact('tours')); // Предполагается, что у вас есть представление tours.index
    }
    public function getContacts()
    {
        return view('contacts');
    }

}
