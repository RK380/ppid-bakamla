<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class PermohonanInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view('pemohon-register', [
            'klasifikasis' => $klasifikasis
        ], compact('today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    public function indexlembaga()
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
        return view('lembaga-register', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
    }

    public function indexperorangan()
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
        return view('perorangan-register', compact('klasifikasis','today', 'thisWeek', 'thisMonth', 'thisYear', 'total'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PermohonanInformasi $permohonanInformasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PermohonanInformasi $permohonanInformasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PermohonanInformasi $permohonanInformasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PermohonanInformasi $permohonanInformasi)
    {
        //
    }
}
