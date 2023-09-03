<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class TestInputController extends Controller
{
    public function index(){

        Barang::create([
            'name' => 'arduino',
            'type'=>'habis pakai',
            'condition' => 'bagus',
            'quantity' => 100
        ]
        );
        echo 'sukses';
    }

   public function test_input(Request $request){
        Barang::create([
            'name' => $request->input('name'),
            'type' =>$request->input ('type'),
            'condition' => $request->input('condition'),
            'quantity' => $request->input ('quantity')
        ]);
        echo 'sukses';
    }

   public function form(){
   
        return view ('test_form');
    }

    public function table(){
         $data = Barang::all();
        // $data = Barang::where('condition', 'Bagus')->get();
        // dd($data);
        return view ('testing_table', compact('data'));
    }
}
