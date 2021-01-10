<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class BreakfastController extends Controller
{
    public function index()
    {
        $breakfasts = Recipe::where('type', '=', 'breakfast')->where('status', '=', 'approved')->get();

        return view('pages.recipes.breakfast', compact('breakfasts'));
    }

}
