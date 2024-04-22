<?php

namespace App\Http\Controllers;

use App\Models\Colline;
use App\Models\CommentCol;
use App\Models\ImageAc;
use Illuminate\Http\Request;

class ColiController extends Controller
{
    public function index($id)
    {
        $collines =Colline::all();
        $commentC = CommentCol::all();
        $imgAc = ImageAc::all();

        return view('page1', compact('collines'));

    }

    public function createCommentC(Request $request,$id){
        $request->validate([
            "contenu"=>['required','min:10','max:110'],
            'colline_id'=>['integer']
        ]);
        $commentC =new CommentCol;
        $commentC->contenu = $request->contenu;
        $commentC->colline_id = $request->colline_id;
        $commentC->save();

        return redirect()->back();


    }


}
