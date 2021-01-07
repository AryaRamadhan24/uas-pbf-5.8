<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class jenisController extends Controller
{
    public function index()
    {
        $data = DB::table('data_jenis')->get();
        return view ('dataJenis.index',compact ('data'));
    }

    public function add()
    {
        return view ('dataJenis.tambahJenis');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required'
        ],
        [
            //?
            'required'=>'wajib di isi',
        ]
    );

        DB::table('data_jenis')->insert([
            'jenis_id'=>Uuid::generate(4),
            'nama'=>$request->nama
        ]);

        // Alert::success('selamat' ,'anda berhasil menginputkan');

        return redirect('jenis');

    }

    public function edit($id)
    {
        $data = DB::table('data_jenis')->where('jenis_id',$id)->first();
        return view('dataJenis.edit',compact('data'));
    }
}
