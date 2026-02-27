<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use App\Models\Upload;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class HalamanController extends Controller
{
    public function index()
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
        return view('halaman/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function profil()
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
        return view('halaman/profil/index',compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function sejarah()
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
        return view('halaman/sejarah/index',compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function tugas()
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
        return view('halaman/tugas/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function visimisi()
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
        return view('halaman/visimisi/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function strukturorg()
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
        return view('halaman/strukturorg/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function infopsb(Request $request)
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
        if ($request->ajax()) {

            $data = Upload::query();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $viewUrl = route('infopsb.viewPdf', $row->id, $row->foto);
                        return '<a href="'.$viewUrl.'" class="btn btn-sm btn-primary" target="_blank">View PDF</a>';

                        // $btn = '<a href="'.'infopsbview'.'?id='.$row->id.'" class="btn btn-success btn-sm" target="_blank">View</a>';
                        // return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        // $data = Upload::all();
        return view('halaman/infopsb/index', compact('today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function viewPdf($id)
    {
        $user = Upload::findOrFail($id);
        $pdf = Pdf::loadView('halaman/infopsb/view', compact('user'));
        return $user->stream('file-'.$user->foto.'.pdf');

    return view('halaman/infopsb/view', ['pdfPath' => $upld->foto]);
    }

    function infopss()
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
        return view('halaman/daftarinfo/infopss', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function infopsm()
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
        return view('halaman/daftarinfo/infopsm', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function infodkc()
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
        return view('halaman/daftarinfo/infodkc', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function daftarinfo()
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
        return view('halaman/daftarinfo/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    // function sop()
    // {
    //     $klasifikasis = Klasifikasi::orderBy('created_at', 'desc')->get();
    //     return view('halaman/standpel/index', compact('klasifikasis'));
    // }

    function statistik()
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
        return view('halaman/statistik/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function faq()
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
        return view('halaman/faq/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function unitkerja()
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
        return view('halaman/unitkerja/index', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    function kep90()
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
        return view('halaman/standpel/kep', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }
}
