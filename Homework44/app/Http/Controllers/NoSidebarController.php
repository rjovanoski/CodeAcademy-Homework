<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoSidebarController extends Controller
{
    public function show(){
        return view('no-sidebar');
    }
}
