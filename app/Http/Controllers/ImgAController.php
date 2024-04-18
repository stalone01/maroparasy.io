<?php

namespace App\Http\Controllers;

use App\Models\ImageAc;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImgAController extends Controller
{
    public function index()
    {
        return view('partiels.insert_img_Ac');
    }

    public function store(Request $request)
    {
        $request ->validate(
            [
                "path"=>['unique:image_acs'],
            ]
            );

        $path = $request->file('file')->store('/public/ImageAcs');

        $imgAc = new ImageAc();
        $imgAc->path = $path;
        $imgAc->save();

        return redirect('/')->with('status',"succes !!!!!");

    }
}
