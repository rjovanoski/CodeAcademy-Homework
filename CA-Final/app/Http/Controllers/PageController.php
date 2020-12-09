<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function recipes()
    {
        return view('pages.recipes');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function breakfast()
    {
        return view('pages.recipes.breakfast');
    }
    public function bread()
    {
        return view('pages.recipes.bread');
    }
    public function burger()
    {
        return view('pages.recipes.burger');
    }
    public function meat()
    {
        return view('pages.recipes.meat');
    }
    public function pasta()
    {
        return view('pages.recipes.pasta');
    }
    public function pizza()
    {
        return view('pages.recipes.pizza');
    }
    public function cake()
    {
        return view('pages.recipes.cake');
    }
    public function soup()
    {
        return view('pages.recipes.soup');
    }
    public function vegan()
    {
        return view('pages.recipes.vegan');
    }
}
