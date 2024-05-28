<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function showPost(){
        $posts = Post::all();
        // dd($posts);
        return view('dashiboard',compact('posts'));
    }
}
