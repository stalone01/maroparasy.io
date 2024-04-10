<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('showPost', compact('posts'));
    }

    public function showPosts(){
        $posts = Post::all();

        return view('showPost', compact('posts'));
    }

}
