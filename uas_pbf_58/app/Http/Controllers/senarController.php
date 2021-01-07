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
    public function store(){
        $this->validate($request,[
            'nama'=>'required|unique:datapegawai|min:6|max:30|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'nohp'=>'required|digits_between:0,14|numeric',
            'jabatan'=>'required',
            'alamat'=>'required'
        ],
        [
            //?
            'required'=>'wajib di isi',
        ]
    );

        DB::table('datapegawai')->insert([
            'pegawai_id'=>Uuid::generate(4),
            'nama'=>$request->nama,
            'nohp'=>$request->nohp,
            'jabatan'=>$request->jabatan,
            'alamat'=>$request->alamat
        ]);

        Alert::success('selamat' ,'anda berhasil menginputkan');

        return redirect('pegawai');
    }

    public function tambahUkuran(){
        return view ('dataSenar.tambahUkuran');
    }

    public function tambahJenis(){
        return view ('dataSenar.tambahJenis');
    }
}
