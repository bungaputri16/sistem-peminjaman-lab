<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    
    function index($param1){
        return view('artikel', compact('param1'));
    }
}
