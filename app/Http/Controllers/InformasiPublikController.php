<?php

namespace App\Http\Controllers;

use App\Models\InformasiPublik;
use App\Models\Klasifikasi;
use App\Models\Lokasi;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
use Carbon\Carbon;

class InformasiPublikController extends Controller
{
    public function home($id=null)
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
        $datas = InformasiPublik::where('klasifikasi_id', $id)->orderBy('created_at', 'desc')->get();
        $klasifikasis = Klasifikasi::orderBy('created_at', 'desc')->get();
        $lokasi = Lokasi::all();
        //dd($klasifikasis);
        return view('infopub', [
            'title' => 'Informasi Publik',
            'datas' => $datas,
            'klasifikasis' => $klasifikasis,
            // 'profilkantor' => ProfilKantor::first()
        ], compact('today', 'thisWeek', 'thisMonth', 'thisYear', 'total','lokasi'));
    }

    public function unduh($id)
    {
        $data = InformasiPublik::findorfail($id);
        $mypath = public_path().'/'.$data->file;
        // dd($mypath);

        $encrypt_name = time().$data->judul;
        return response()->file($mypath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $encrypt_name . '"'
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = InformasiPublik::orderBy('created_at', 'desc')->get();
        // dd($datas);
        return view('be.informasipublik.home', [
            'title' => 'Informasi Publik',
            'datas' => $datas
        ]);
    }

    public function download($id)
    {
        $data = InformasiPublik::findorfail($id);
        $mypath = public_path().'/'.$data->file;
        // dd($mypath);

        $encrypt_name = time().$data->judul;
        return response()->download($mypath, $encrypt_name);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('be.informasipublik.create', [
            "title" => "Informasi Publik",
            "klasifikasis" => Klasifikasi::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'klasifikasi_id' => 'required',
            'judul' => 'required',
            'ringkasan' => 'required',
            'file' => 'required|mimes:pdf|max:102400', // 102400 KB = 100 MB'
        ]);

        $file =  $request->file;
        $newfile = time().$file->getClientOriginalName();
        $ukuranfile = $file->getSize();
        // $filesize = convertUploadedFileToHumanReadable($ukuranfile);

        $create = InformasiPublik::create([
            'user_id' => Auth::user()->id,
            'klasifikasi_id' => $request->klasifikasi_id,
            'judul'=> $request->judul,
            'ringkasan'=> $request->ringkasan,
            'file'=> 'uploads/infopub/'.$newfile,
            'filesize' => $ukuranfile
        ]);

        $file->move('uploads/infopub/',$newfile);
        return redirect()->route('admin.informasipublik');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = InformasiPublik::findorfail($id);
        // return dd($data);
        return view('be.informasipublik.show',[
            "title" => "Informasi Publik",
            "data" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = InformasiPublik::findorfail($id);
        return view('be.informasipublik.edit', [
            "title" => "Ubah Data Informasi Publik",
            "data" => $data,
            "klasifikasis" => Klasifikasi::get()
        ]);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'klasifikasi_id' => ['required'],
            'judul'=>['required'],
            'ringkasan'=>['required'],
        ]);

        $data = InformasiPublik::findorfail($id);

        if($request->has('file')){
            if(File::exists($request->filelama)){
                File::delete($request->filelama);
            }
            
            $file =  $request->file;
            $newfile = time().$file->getClientOriginalName();
            $ukuranfile = $file->getSize();
            // $filesize = convertUploadedFileToHumanReadable($ukuranfile);

            $file->move('uploads/infopub/',$newfile);

            
            $data_array = [
                'klasifikasi_id'=> $request->klasifikasi_id,
                'judul'=>$request->judul,
                'ringkasan'=>$request->ringkasan,
                'file'=> 'uploads/infopub/'.$newfile,
                'filesize' => $ukuranfile
            ];
        } else {
            $data_array = [
                'klasifikasi_id'=> $request->klasifikasi_id,
                'judul'=>$request->judul,
                'ringkasan'=>$request->ringkasan,
                
            ];
        }

        $data->update($data_array);
        return redirect()->route('admin.informasipublik');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = InformasiPublik::findorfail($id);
        $file = $data->file;
        if(File::exists($file)){
            File::delete($file);
        }

        $data = InformasiPublik::where('id',$data->id)->delete();
        return redirect()->route('admin.informasipublik');

    }
}
