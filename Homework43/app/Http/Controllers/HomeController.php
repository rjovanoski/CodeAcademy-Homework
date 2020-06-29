<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;

class HomeController extends Controller
{
    public function index(){

        $gallery = Gallery::all();

        return view('home', [
            'gallery'=>$gallery
        ]);
    }
}
