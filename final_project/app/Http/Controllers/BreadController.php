<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class BreadController extends Controller
{
    public function index()
    {
        $breads = Recipe::where('type', '=', 'bread')->where('status', '=', 'approved')->get();

        return view('pages.recipes.bread', compact('breads'));
    }

}
