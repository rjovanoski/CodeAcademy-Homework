<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    public function index()
    {
        $pastas = Recipe::where('type', '=', 'pasta')->where('status', '=', 'approved')->get();
       
        return view('pages.recipes.pasta', compact('pastas'));
    }
}
