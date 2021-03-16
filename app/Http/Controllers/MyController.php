<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class MyController extends Controller
{
    public function home(){
        $data_shop = Dress::all();
        $data = [
            'dresses' => $data_shop
        ];
        
        return view('home', $data);
    }

    public function contact(){
        return view('contatti');
    }

    
}
