<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RightSidebarController extends Controller
{
    public function show(){
        return view('right-sidebar');
    }
}
