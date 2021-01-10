<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class VeganController extends Controller
{
    public function index()
    {
        $vegans = Recipe::where('type', '=', 'vegan')->where('status', '=', 'approved')->get();

        return view('pages.recipes.vegan', compact('vegans'));
    }

}
