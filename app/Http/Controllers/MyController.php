<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class MyController extends Controller
{
    public function home(){
        
        $data = [
            'saluto' => 'Welcome on Home Page of Shop'
        ];

        return view('home', $data);
    }

    public function contact(){
        return view('contatti');
    }

    public function shop(){
        $data_shop = Dress::all();
        $data = [
            'dresses' => $data_shop
        ];

        return view('shop', $data);
    }
}
