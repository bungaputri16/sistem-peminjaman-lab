<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    function index(Request $request){
        $search = $request->input('search');
        $order = $request->input('order');
        return view('search', compact('search', 'order'));
    }
}
