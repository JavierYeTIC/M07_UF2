<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin($v1,$v2,$v3,$v4){
        $ini=$v1.' '.$v2.' '.$v3.' '.$v4;
        return view('signin')->with('titol',$ini);
    }
   public function signup($v1,$v2,$v3){
        $up=$v1.' '.$v2.' '.$v3;
        return view('signup')->with('titol',$up);
    }
}
