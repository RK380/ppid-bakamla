<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();

        return view('be.lokasi.home', compact('lokasi'));
    }

    public function create()
    {
        
        return view('be.lokasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);

        Lokasi::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        // dd('berhasil insert');
        return redirect()->route('admin.lokasi')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $lokasi = Lokasi::findOrFail($id);
        return view('be.lokasi.edit', compact('lokasi'));
    }

    public function update(Request $request, $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->update($request->all());

        return redirect()->route('lokasi.home')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Lokasi::findOrFail($id)->delete();
        return back()->with('success','Data berhasil dihapus');
    }
}
