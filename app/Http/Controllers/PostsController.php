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
    public function createPosts(Request $request)
    {
        $request->validate([
            'email'=>'required|min:7|max:60|unique:username,column,except,id',
            'message'=>'required|min:10|max:255'
        ]);

        $posts = new Post();
        $posts->email = $request->email;
        $posts->message= $request->message;
        $posts->save();

        return redirect('/')->with('status',"message a été bien envoyé avec succes");
    }

}
