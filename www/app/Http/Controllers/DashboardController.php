<?php

namespace App\Http\Controllers;

use App\User;

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
        $user_id = auth()->user()->id;
        $user = User::findOrFail($user_id);
        return view('dashboard')->with('posts', $user->posts()->
                orderBy('created_at', 'desc')->paginate(10));
    }
}
