<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phone;
class StackPageController extends Controller
{
    public function  index(){
        $phones =phone::all();
        return view('home',["phones"=>$phones]);
    }
    public function  about(){
        return view('about');
    }
}
