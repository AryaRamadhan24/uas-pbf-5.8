<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class senarController extends Controller
{
    public function index(){
        return view ('dataSenar.index');
    }

    public function jenis(){
        return view ('dataSenar.jenis');
    }
    
    public function ukuran(){
        return view ('dataSenar.ukuran');
    }

    public function tambah(){
        return view ('dataSenar.tambah');
    }

    public function tambahUkuran(){
        return view ('dataSenar.tambahUkuran');
    }

    public function tambahJenis(){
        return view ('dataSenar.tambahJenis');
    }
}
