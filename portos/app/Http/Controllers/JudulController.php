<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JudulPortos;

class JudulController extends Controller
{
    // public function create(){



        
    // }

    public function upload(Request $request){
// dd($request->all());
        // $file = $request->file('image');
        $porto = new JudulPortos();
        $porto->judul = $request->judul;
        $porto->jurusan = $request->jurusan;
        $porto->kelas = $request->kelas;
        $porto->link = $request->link;
        // $porto->image = $file->getClientOriginalName();
        // $tujuan_upload = 'image';
            // $file->move($tujuan_upload,$file->getClientOriginalName());
            $porto->save;
            

        
    }
}