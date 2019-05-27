<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScriptsController extends Controller
{
    public function showSample(){
        return view("scripts.showSample");
    }
}
