<?php

namespace App\Http\Controllers;

use App\Models\Colline;
use Illuminate\Http\Request;

class ColiController extends Controller
{
    public function index()
    {
        $collines = Colline::paginate(3);

        return view('page1', compact('collines'));

    }


}
