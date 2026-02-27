<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password Wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            //kalo otentikasi sukses
            // return 'sukses';
            return redirect('admin')->with('Success','Berhasil Login');
        }else{
            //kalo otentikasi gagal
            // return 'gagal';
            return redirect('sesi')->withErrors('Username dan Password Salah');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('sesi')->with('Success','Berhasil Logout');
    }

    function register()
    {
        return view('sesi/register');
    }

    function create(Request $request)
    {
        Session::flash('name',$request->name);
        Session::flash('email',$request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ],[
            'name.required' => 'Nama Wajib diisi',
            'email.required' => 'Email Wajib diisi',
            'email.email' => 'Silahkan Masukkan Email yang valid',
            'email.unique' => 'Email Sudah Pernah digunakan',
            'password.required' => 'Password Wajib diisi',
            'password.min' => 'Minimum Password yang dizinkan adalah 6 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            //kalo otentikasi sukses
            // return 'sukses';
            return redirect('admin')->with('Success', Auth::user()->name . 'Berhasil Login');
        }else{
            //kalo otentikasi gagal
            // return 'gagal';
            return redirect('sesi')->withErrors('Username dan Password Salah');
        }
    }
}
