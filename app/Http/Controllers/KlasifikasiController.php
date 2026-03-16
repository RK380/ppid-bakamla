<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use Illuminate\Http\Request;

class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klasifikasis = Klasifikasi::orderBy('created_at', 'desc')->get();
        return view('be.klasifikasi.home', [
            'title' => 'Klasifkasi',
            'klasifikasis' => $klasifikasis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('be.klasifikasi.create',[
            'title' => 'Tambah Klasifikasi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['klasifikasi' => ['required']]);

        $klasifikasi = new Klasifikasi([
            'klasifikasi' => $request->klasifikasi
        ]);
        $klasifikasi->save();
        return redirect()->route('admin.klasifikasi');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $klasifikasi = Klasifikasi::findorfail($id);
        return view('be.klasifikasi.edit', [
            'title' => 'Edit Klasifikasi',
            'data' => $klasifikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['klasifikasi' => ['required']]);

        $klasifikasi = Klasifikasi::findorfail($id);

        $data_klasifikasi = [
            'klasifikasi' => $request->klasifikasi
        ];

        $klasifikasi->update($data_klasifikasi);
        return redirect()->route('admin.klasifikasi');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $klasifikasi_data = Klasifikasi::findorfail($id);
        $klasifikasi = Klasifikasi::where('id', $klasifikasi_data->id)->delete();
        return redirect()->route('admin.klasifikasi');

    }
}
