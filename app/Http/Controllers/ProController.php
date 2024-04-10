<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ProController extends Controller
{
    public function index(){
        $comments = Comment::paginate(3);

        return view('page1', compact('comments'));
    }

    public function show_comments(){
        $comments = Comment::all();

        return view('partiels.showComment', compact('comments'));
    }

    public function createComment(Request $request)
    {
        $request->validate([
            'username'=>'required|min:3|max:50|unique:username,column,except,id',
            'msg'=>'required|min:10|max:200'
        ]);

        $comment = new Comment();
        $comment->username = $request->username;
        $comment->msg= $request->msg;
        $comment->save();

        return redirect('/')->with('status',"Commentaire bien envoyé avec succes");
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