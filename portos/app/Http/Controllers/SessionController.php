<?php

namespace App\Http\Controllers;

use App\Models\JudulPortos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function masuk() {
        return view('sesi/masuk');
    }
    public function login(Request $request) {

        Session::flash('email',$request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('home')->with('Berhasil login');

        }else

            return redirect('sesi')->withErrors('Username dan password salah');
    }

    function register()
    {
        return view('sesi/register');
    }

    public function index(Request $request)
    {
    // $users = User::find($id);
    // return view('profile', ['users' => $users])
        $users = Auth::user();
        // dd($users);
        $judul_portos = JudulPortos::where('user_id' , $users->id)->with('image')->where('accept', 1);
        // dd($judul_portos->get());
        return view('profile', ['users' => $users,'judul_portos'=>$judul_portos->get()]);
    }

    public function edit()
    {
    $user = Auth::user();
    return view('update', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ], [
            'name' => 'Masukkan nama anda',
            'email' => 'Masukkan email anda',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_image'), $filename);
            $user->profile_image = $filename;
        }

        if ($request->has('twitter')) {
            $user->twitter = $request->twitter;
        }

        if ($request->has('instagram')) {
            $user->instagram = $request->instagram;
        }

        if ($request->has('facebook')) {
            $user->facebook = $request->facebook;
        }

        if ($request->has('bio')) {
            $user->bio = $request->bio;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }





    function create(Request $request)
    {
        Session::flash('name',$request->name);
        Session::flash('email',$request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan 6 karakter',
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('home')->with('Berhasil login');

        }else{
            return redirect('sesi')-> withErrors('Username dan password yang dimasukan tidak valid');
        }
    ;}
    public function asep ($id)
    {
        $data = JudulPortos::orderBy('user_id' , 'desc')->with('user')->where('accept', 1)->paginate(4);

        return view('admin.master')->with('data' , $data);

    }

}
