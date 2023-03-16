<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)    
    {
        // Validate request
        $request->validate([
            'file' => 'required|file|max:10240', // Max file size: 10MB
            'foto'=> 'required|mimes:jpeg,jpg,png,gif',

        ], [
            'foto.required' => 'Silahkan upload foto'
           
            
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'),);
        

        // Check if file exists in request
        if($request->hasFile('file')) {
            
            // Get file name with extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get file extension
            $extension = $request->file('file')->getClientOriginalExtension();

            // Create unique file name
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            // Store file
            $path = $request->file('file')->storeAs('public/uploads', $fileNameToStore);

            return view('upload', [
                'message' => 'File uploaded successfully!',
                'path' => $path
            ]);
        } else {
            return view('upload', [
                'error' => 'No file found.'
            ]);
        }
    }

    public function create(Request $request){
        
        $file = $request->file();
    }
}