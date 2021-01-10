<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class BurgerController extends Controller
{
    public function index()
    {
        $burgers = Recipe::where('type', '=', 'burger')->where('status', '=', 'approved')->get();

        return view('pages.recipes.burger', compact('burgers'));
    }

}
