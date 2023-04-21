<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JudulPortos;

class adminPortoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $judul_portos = JudulPortos::orderBy('user_id' , 'desc')->with('user');
        $data = JudulPortos::orderBy('user_id' , 'desc')->with('user','image')->where('accept', 0)->paginate(4);
        // $data = JudulPortos::where('user_id' , $users->id)->with('image');
    return view('admin.master')->with('data' , $data  );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JudulPortos::where('id', $id)->delete();
        return redirect()->to('admin')->with('success' , 'Berhasil Melakukan Delete Data');
    }

    public function asep ($id)
    {
        JudulPortos::find($id)->update([
            'accept' => 1
        ]);
        $data = JudulPortos::orderBy('user_id' , 'desc')->with('user')->where('accept', 0)->paginate(4);

        return view('admin.master')->with('data' , $data);

    }
}
