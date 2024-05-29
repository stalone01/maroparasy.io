<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPost(){
        $users = User::all();
        $posts = Post::all();
        return view('dashiboard',compact('posts','users'));
    }

    public function showUser(){

         $users = User::all();
         $posts = Post::all();
         
         return view('dashiboard', compact('users','posts'));
    }
}
