<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\FacadesLog;

class LineBotController extends Controller
{
    //
    public function index()
    {
        return view('linebot.index');
    }

    public function parrot(Request $request)
    {

    }
}
