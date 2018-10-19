<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Demonstrates the user->posts relationship model
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        // return view('dashboard.navigation.dash')->with('posts', $user->posts);

        $user_id = auth()->user()->id;
        
        // makes pagination work with model, won't work with a collection
        $posts = Post::where('user_id', $user_id)->paginate(3);
        return view('dashboard.navigation.dash')->with('posts', $posts);
    }
}
