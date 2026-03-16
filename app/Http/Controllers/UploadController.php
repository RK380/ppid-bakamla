<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pdfs = Upload::all();
        return view('admin.upload.index', compact('pdfs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.upload.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        Session::flash('judul',$request->nomor_induk);
        Session::flash('satker',$request->nama);

        $request->validate([
            'judul' => 'required|string|max:255',
            'satker' => 'required|string|max:255',
            'foto' => 'required|mimes:pdf|max:2048'
        ],[
            'judul.required'=>'Judul Wajib Diisi',
            'satker.required'=>'Unit Kerja Wajib Diisi',
            'foto.required'=>'Silahkan Upload Dokumen',
            'foto.mimes'=>'File hanya diperbolehkan berekstensi pdf'
        ]);
        $foto_file = $request->file('foto');
        $foto_ekstensi =$foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data = [
            'judul' => $request->input('judul'),
            'satker' => $request->input('satker'),
            'foto' => $foto_nama
        ];
        Upload::create($data);
        return redirect('upload')->with('success','Berhasil menambahkan data');
        // return redirect()->route('admin.upload.index')->with('success', 'PDF uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Upload::where('id',$id)->first();
        return view('upload/show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
