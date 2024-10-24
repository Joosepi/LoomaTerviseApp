<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $pets = $user->pets;
        $petCount = $pets->count();
        
        return view('dashboard', compact('user', 'pets', 'petCount'));
    }
}
