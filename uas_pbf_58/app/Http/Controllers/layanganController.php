<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layanganController extends Controller
{
    public function index(){
        return view ('dataSenar.index');
    }
}
