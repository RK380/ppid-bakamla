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
            'klasifikasis' => $pesan
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
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string'
    ]);

    KontakKami::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
    ]);

    return back()->with('success','Pesan berhasil dikirim');
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
