<?php

namespace App\Http\Controllers;

use App\Models\ImageAc;
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
        // dd($request->all());

        $filename = "";

        if ($request->hasFile('file_input')) {
            $filename = $request->getSchemeAndHttpHost().'/storage/app/public/ImageAc/'.time().'.'.$request->file_input->extension();
            $request->file_input->move(public_path('/storage/app/public/ImageAc/'),$filename);
        }
        $imageAc = ImageAc::saved([
            'path'=>$filename
        ]);
        return redirect()->back();
    }
}
