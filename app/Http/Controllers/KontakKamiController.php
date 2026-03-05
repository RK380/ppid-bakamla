<?php

namespace App\Http\Controllers;

use App\Models\KontakKami;
use Illuminate\Http\Request;

class KontakKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = KontakKami::latest()->get();
        return view('be.kontakkami.home', [
            'title' => 'Pesan Masuk Kontak Kami',
            'pesan' => $pesan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
        'pesan' => 'required|string'
        ]);

        KontakKami::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);

        return redirect()->back()->with('success','Pesan Anda berhasil dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(KontakKami $kontakKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KontakKami $kontakKami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KontakKami $kontakKami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KontakKami $kontakKami)
    {
        //
    }
}
