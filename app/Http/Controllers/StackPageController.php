<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phone;
class StackPageController extends Controller
{
    public function  index(){
        return view('home');
    }
    public function  about(){
        return view('about');
    }
}
