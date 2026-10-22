<?php

namespace App\Http\Controllers;

use App\Models\Sport; 
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function home()
    {
        return view('sports.home');
    }

    public function sportsList()
    {
        $sports = Sport::all();
        return view('sports.sports-list', compact('sports'));
    }

    public function show($id)
    {
        $sport = Sport::findOrFail($id);
        return view('sports.detail', compact('sport'));
    }

    public function wellness()
    {
        return view('sports.wellness');
    }

    public function about()
    {
        return view('sports.about');
    }
}