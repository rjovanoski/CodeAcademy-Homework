<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cards;

class HomeController extends Controller
{
    public function show(){
        
        $cards = Cards::all();

        return view('home', [

            "cards"=>$cards
        ]);
    }
}
