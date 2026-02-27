<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Visitor;
use Carbon\Carbon;

class SopController extends Controller
{
    public function home()
    {
        $today = Visitor::whereDate('created_at', Carbon::today())->count();
        $thisWeek = Visitor::whereBetween('created_at', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ])->count();
        $thisMonth = Visitor::whereMonth('created_at', Carbon::now()->month)
                            ->whereYear('created_at', Carbon::now()->year)
                            ->count();
        $thisYear = Visitor::whereYear('created_at', Carbon::now()->year)->count();
        $total = Visitor::count();
        $klasifikasis = Klasifikasi::orderBy('created_at', 'desc')->get();
        $datas = Sop::orderBy('created_at', 'desc')->get();
        // dd($datas);
        return view('halaman.standpel.index', [
            'title' => 'Standar Layanan (Operasional) PPID',
            'datas' => $datas,
            'klasifikasis' => $klasifikasis
            // 'profilkantor' => ProfilKantor::first()
        ], compact('today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    public function unduh($id)
    {
        $data = Sop::findorfail($id);
        $mypath = public_path().'/'.$data->file;
        // dd($mypath);

        $encrypt_name = time().$data->judul;
        return response()->file($mypath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $encrypt_name . '"'
        ]);
    }

    // public function download($id)
    // {
    //     $data = Sop::findorfail($id);
    //     $mypath = public_path().'/'.$data->file;
    //     // dd($mypath);

    //     $encrypt_name = time().$data->judul;
    //     return response()->download($mypath, $encrypt_name);
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Sop::orderBy('created_at', 'desc')->get();
        // dd($datas);
        return view('be.sop.home', [
            'title' => 'Standar Layanan Operasional',
            'datas' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('be.sop.create', [
            "title" => "Standar Layanan Operasional",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'file' => 'required|mimes:pdf|max:102400', // 102400 KB = 100 MB'
        ]);

        $file =  $request->file;
        $newfile = time().$file->getClientOriginalName();
        // $ukuranfile = $file->getSize();
        // $filesize = convertUploadedFileToHumanReadable($ukuranfile);

        $create = Sop::create([
            'judul'=> $request->judul,
            'file'=> 'uploads/sop/'.$newfile,
            // 'filesize' => $ukuranfile
        ]);

        $file->move('uploads/sop/',$newfile);
        return redirect()->route('admin.sop');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Sop::findorfail($id);
        // return dd($data);
        return view('be.sop.view',[
            "title" => "Standar Layanan Operasional",
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Sop::findorfail($id);
        return view('be.sop.edit', [
            "title" => "Ubah Data Standar Layanan Operasional",
            "data" => $data,
        ]);
        // if (Auth::user()->hasRole('admin')) {
        // } else {
        //     if ($data->user_id == Auth::user()->id) {
        //         return view('be.informasipublik.edit', [
        //             "title" => "Ubah Data Informasi Publik",
        //             "data" => $data,
        //             "klasifikasis" => Klasifikasi::get()
        //         ]);
        //     } else {
        //         Alert::error('Maaf','Anda tidak mempunyai akses ke halaman ini.');
        //         return redirect()->route('petugas.informasipublik');
        //     }
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul'=>['required'],
        ]);

        $data = Sop::findorfail($id);

        if($request->has('file')){
            if(File::exists($request->filelama)){
                File::delete($request->filelama);
            }
            
            $file =  $request->file;
            $newfile = time().$file->getClientOriginalName();
            // $ukuranfile = $file->getSize();
            // $filesize = convertUploadedFileToHumanReadable($ukuranfile);

            $file->move('uploads/sop/',$newfile);

            
            $data_array = [
                'judul'=>$request->judul,
                'file'=> 'uploads/sop/'.$newfile,
                // 'filesize' => $ukuranfile
            ];
        } else {
            $data_array = [
                'judul'=>$request->judul,
            ];
        }

        $data->update($data_array);
        return redirect()->route('admin.sop');

        // if($data){
        //     Alert::success('Sukses','Informasi Berhasil di Update');
        //     if (Auth::user()->hasRole('admin')) {
        //     } else {
        //         return redirect()->route('petugas.informasipublik');
        //     }
        // } else {
        //     Alert::error('Gagal', 'Informasi Gagal di Update');
        //     if (Auth::user()->hasRole('admin')) {
        //         return redirect()->route('admin.informasipublik');
        //     } else {
        //         return redirect()->route('petugas.informasipublik');
        //     }
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Sop::findorfail($id);
        $file = $data->file;
        if(File::exists($file)){
            File::delete($file);
        }

        $data = Sop::where('id',$data->id)->delete();
        return redirect()->route('admin.sop');

        // if($data){
        //     Alert::success('Success','Informasi Berhasil di Hapus');
        //     if (Auth::user()->hasRole('admin')) {
        //     } else {
        //         return redirect()->route('petugas.informasipublik');
        //     }
        // } else {
        //     Alert::error('Failed', 'Informasi Gagal di Hapus');
        //     if (Auth::user()->hasRole('admin')) {
        //         return redirect()->route('admin.informasipublik');
        //     } else {
        //         return redirect()->route('petugas.informasipublik');
        //     }
        // }
    }
}
