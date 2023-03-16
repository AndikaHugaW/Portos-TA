<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JudulPortos;

class JudulController extends Controller
{
    // public function create(){



        
//     // }

//     public function upload(Request $request){
// // dd($request->all());
//         // $file = $request->file('image');
//         $porto = new JudulPortos();
//         $porto->judul = $request->judul;
//         $porto->jurusan = $request->jurusan;
//         $porto->kelas = $request->kelas;
//         $porto->link = $request->link;
//         // $porto->image = $file->getClientOriginalName();
//         // $tujuan_upload = 'image';
//             // $file->move($tujuan_upload,$file->getClientOriginalName());
//             $porto->save;
            

        
//     }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'juruan' => 'required|string|in:Produksi Grafika,Desain Grafis,Animasi,Desain Komunikasi Visual,Rekayasa Perangkat Lunak',
            'kelas' => 'required|string|in:10,11,12',
            'kategori' => 'required|string|in:Animation,Branding,Illustration,Photography,Mobile,Website',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'link' => 'required|string|url|max:255',
        ]);

        $judulPorto = new JudulPortos([
            'judul' => $validatedData['judul'],
            'juruan' => $validatedData['juruan'],
            'kelas' => $validatedData['kelas'],
            'kategori' => $validatedData['kategori'],
            'link' => $validatedData['link'],
        ]);

        $images = [];

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $images[] = $imageName;
        }
    }

    $imagesString = json_encode($images); // convert array to string
    $judulPorto->images = $imagesString; // assign string to the model property
    $judulPorto->save();

        return redirect()->route('profile')
            ->with('success', 'Judul portofolio berhasil ditambahkan');
    }

}