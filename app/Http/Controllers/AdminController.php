<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KontakKami;

class AdminController extends Controller
{
    function index()
    {
        $pesanBaru = KontakKami::where('is_read', false)
            ->latest()
            ->take(5)
            ->get();

        $totalPesanBaru = KontakKami::where('is_read', false)->count();
        return view("admin/index", compact('pesanBaru','totalPesanBaru'));
    }
}
