<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class ProController extends Controller
{
    public function index(){
        $comments = Comment::all();
        $posts = Post::all();

        return view('page1');
    }

    public function create()
    {
        return view('page1');
    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
    
}