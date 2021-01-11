<?php

namespace App\Http\Controllers;

use App\Recipe;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $userId = Auth::id();

        $recipes = Recipe::where('user_id', $userId)->where('status', '=', 'approved')->get();

        return view('profile.home', compact('recipes'));
    }

    public function edit($id)
    {
        $user = Auth::user()->find($id);

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        request()->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'avatar' => 'image|mimes:jpg,jpeg,png',
        ]);

        if (request()->hasFile('avatar')) {
            
            $filename = request()->avatar->getClientOriginalName();

            if (Auth::user()->avatar != $filename) {
                
                Storage::disk('public')->delete("images/user/".Auth::id()."/".Auth::user()->avatar);

                request()->avatar->storeAs('images/user/'.Auth::id().'/', $filename, 'public');

                Auth::user()->update([
                    'avatar' => $filename
                ]);

            }else {
                return redirect()->back()->with('error', 'This image already exist!');
            }
        }

        Auth::user()->update([
            'name' => request()->name,
            'username' => request()->username,
            'email' => request()->email
        ]);

        return redirect()->back()->with('message', 'Profile Updated');
    }
}
