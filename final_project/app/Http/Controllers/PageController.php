<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $breakfasts = Recipe::where('type', '=', 'breakfast')->where('status', '=', 'approved')->get();
        $breads = Recipe::where('type', '=', 'bread')->where('status', '=', 'approved')->get();
        $pastas = Recipe::where('type', '=', 'pasta')->where('status', '=', 'approved')->get();
        $meats = Recipe::where('type', '=', 'meat')->where('status', '=', 'approved')->get();
        $pizzas = Recipe::where('type', '=', 'pizza')->where('status', '=', 'approved')->get();
        $burgers = Recipe::where('type', '=', 'burger')->where('status', '=', 'approved')->get();
        $cakes = Recipe::where('type', '=', 'cake')->where('status', '=', 'approved')->get();
        $soups = Recipe::where('type', '=', 'soup')->where('status', '=', 'approved')->get();
        $vegans = Recipe::where('type', '=', 'vegan')->where('status', '=', 'approved')->get();

        return view('pages.index', compact('breakfasts', 'breads', 'meats', 'pastas', 'pizzas', 'cakes', 'burgers', 'soups', 'vegans'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function recipes()
    {
        $breakfasts = Recipe::where('type', '=', 'breakfast')->where('status', '=', 'approved')->get();
        $breads = Recipe::where('type', '=', 'bread')->where('status', '=', 'approved')->get();
        $pastas = Recipe::where('type', '=', 'pasta')->where('status', '=', 'approved')->get();
        $meats = Recipe::where('type', '=', 'meat')->where('status', '=', 'approved')->get();
        $pizzas = Recipe::where('type', '=', 'pizza')->where('status', '=', 'approved')->get();
        $burgers = Recipe::where('type', '=', 'burger')->where('status', '=', 'approved')->get();
        $cakes = Recipe::where('type', '=', 'cake')->where('status', '=', 'approved')->get();
        $soups = Recipe::where('type', '=', 'soup')->where('status', '=', 'approved')->get();
        $vegans = Recipe::where('type', '=', 'vegan')->where('status', '=', 'approved')->get();

        return view('pages.recipes', compact('breakfasts', 'breads', 'meats', 'pastas', 'pizzas', 'cakes', 'burgers', 'soups', 'vegans'));
    }
}
