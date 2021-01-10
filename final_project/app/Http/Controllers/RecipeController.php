<?php

namespace App\Http\Controllers;

use Auth;
use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.recipes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        request()->validate([
            'name' => 'required|string|min:3',
            'image' => 'required|image:jpg,jpeg,png',
            'type' => 'required',
            'ingredients' => 'required|string',
            'preparation_time' => 'required|integer',
            'preparation' => 'required|string',
            'description' => 'required|string'
        ]);

        if (request()->hasFile('image')) {
                
            $filename = request()->image->getClientOriginalname();

            request()->image->storeAs('images/'.request()->type.'/', $filename, 'public');
                
        }
        
        Recipe::create([
     
            'user_id' => $userId,
            'name' => request()->name,
            'image' => $filename,
            'type' => request()->type,
            'ingredients' => request()->ingredients,
            'preparation_time' => request()->preparation_time,
            'preparation' => request()->preparation,
            'description' => request()->description,
            'status' => 'pending'
     
        ]);
    
        return redirect(route('profile'))->with('message', 'Recipe Created. Please wait for approval.');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {

        return view('profile.recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
