<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function index()
    {
        $cakes = Recipe::where('type', '=', 'cake')->where('status', '=', 'approved')->get();
        
        return view('pages.recipes.cake', compact('cakes'));
    }

}
