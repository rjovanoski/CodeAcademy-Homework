<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class MeatController extends Controller
{
    public function index()
    {
        $meats = Recipe::where('type', '=', 'meat')->where('status', '=', 'approved')->get();

        return view('pages.recipes.meat', compact('meats'));
    }
}
