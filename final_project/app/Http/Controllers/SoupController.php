<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class SoupController extends Controller
{
    public function index()
    {
        $soups = Recipe::where('type', '=', 'soup')->where('status', '=', 'approved')->get();

        return view('pages.recipes.soup', compact('soups'));
    }

}
