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
            'email'=>'required|min:7|max:60|unique:posts',
            'message'=>'required|min:10|max:255'
        ]);

        $posts = new Post();
        $posts->email = $request->email;
        $posts->message= $request->message;
        $posts->save();

        return redirect('/')->with('status',"message a été bien envoyé avec succes");
    }

    public function updatePosts($id){

        $posts = Post::find($id);

        return view('updatePost', compact('posts'));
    }

    public function updatePost(Request $request){

        $request->validate([
            'email'=>'required|min:7|max:60|unique:posts',
            'message'=>'required|min:10|max:255'
        ]);

        $posts = Post::find($request->id);
        $posts->email = $request->email;
        $posts->message= $request->message;
        $posts->save();

        return redirect('/list.posts')->with('status',"message a été bien modifié avec succes");
    }

}
