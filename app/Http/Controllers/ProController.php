<?php

namespace App\Http\Controllers;

use App\Models\Colline;
use App\Models\Comment;
use App\Models\ImageAc;
use Illuminate\Http\Request;

class ProController extends Controller
{
    public function index(){
        $comments = Comment::paginate(1);
        $collines =Colline::paginate(3);
        $imgAc = ImageAc::all();

        return view('page1', compact('comments','collines','imgAc'));
    }

    public function showComments(){
        $comments = Comment::paginate(1);


        return view('partiels/showComment', compact('comments'));
    }

    public function createComment(Request $request)
    {
        $request->validate([
            'username'=>'required|min:3|max:50|unique:comments',
            'msg'=>'required|min:10|max:200'
        ]);

        $comment = new Comment();
        $comment->username = $request->username;
        $comment->msg= $request->msg;
        $comment->save();

        return redirect('/')->with('status',"Commentaire bien envoyé avec succes");
    }

}
