<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Recipe::where('type', '=', 'pizza')->where('status', '=', 'approved')->get();

        return view('pages.recipes.pizza', compact('pizzas'));
    }

}
