<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScriptsController extends Controller
{
    public function index(){
        return view("scripts.index");
    }
    
    public function showSample(){
        return view("scripts.showSample");
    }
}
