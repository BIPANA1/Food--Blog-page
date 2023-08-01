<?php

namespace App\Http\Controllers;
use App\Models\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auths = Auth::all();
        return view('home',compact('auths'));

    }
    // public function Blog()
    // {
    //     $auths = Auth::all();
    //     return view('Blog',compact('auths'));

    // }

  
}
