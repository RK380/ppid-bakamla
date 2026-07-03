<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\ActivityLog;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        $today = Visitor::whereDate('created_at', Carbon::today())->count();
        $thisWeek = Visitor::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $thisMonth = Visitor::whereMonth('created_at', Carbon::now()->month)->whereYear('created_at', Carbon::now()->year)->count();
        $thisYear = Visitor::whereYear('created_at', Carbon::now()->year)->count();
        $total = Visitor::count();

        // Grafik Visitor 30 Hari Terakhir
        $visitorsChart = Visitor::select(
                DB::raw('DATE(created_at) as tanggal'),
                DB::raw('COUNT(*) as total')
            )
            ->whereDate('created_at', '>=', now()->subDays(30))
            ->groupBy('tanggal')
            ->orderBy('tanggal')
            ->get();

        $chartLabels = $visitorsChart->pluck('tanggal');
        $chartData = $visitorsChart->pluck('total');

        // Activity Log Terbaru
        $activityLogs = ActivityLog::latest()
            ->take(10)
            ->get();

        return view('halaman.index', compact('today', 'thisWeek', 'thisMonth', 'thisYear', 'total', 'chartLabels', 'chartData', 'activityLogs'));
    
    }
}
