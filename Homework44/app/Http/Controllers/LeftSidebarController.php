<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeftSidebarController extends Controller
{
    public function show(){

        return view('left-sidebar');
    }
}
