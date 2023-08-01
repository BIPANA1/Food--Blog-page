<?php

namespace App\Http\Controllers;
use App\Models\Auth;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome(){
        $auths = Auth::all();
        return view('welcome',compact('auths'));
        // return view('welcome');
    }
    public function index(){
        $auths = Auth::all();
        return view('welcome',compact('auths'));
    }

    public function Blog()
    {
        $auths = Auth::all();
        return view('home',compact('auths'));
    }
    public function AddBlog(){
        $auths = Auth::all();
        return view('addBlog',compact('auths'));
        // return view('addBlog');
    }
    public function AddItem(){
        return view('additem');
    }
    public function Description(){
        return view('description');
    }
}
