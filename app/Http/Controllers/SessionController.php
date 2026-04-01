<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    function index()
    {
        // 🔥 kalau sudah login, langsung lempar ke dashboard
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        
            $data = Visitor::select(
            DB::raw('DATE(created_at) as tanggal'),
            DB::raw('count(*) as total')
        )
        ->groupBy('tanggal')
        ->orderBy('tanggal', 'ASC')
        ->get();

        // pisahkan jadi array
        $labels = $data->pluck('tanggal');
        $values = $data->pluck('total');

        return view('sesi/index', compact('labels','values')); // halaman login kamu
    }
    
    function login(Request $request)
    {
        $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            // 🔥 penting (anti session hijack)
            $request->session()->regenerate();

            $user = Auth::user();

            // 🔐 redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard')
                    ->with('success', 'Login berhasil');
            }

            // fallback
            return redirect('/')->with('success', 'Login berhasil');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah'
        ]);
    }

    function logout(Request $request)
    {
        Auth::logout();

    // 🔥 hapus session total
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sesi')->with('success', 'Logout berhasil');
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
