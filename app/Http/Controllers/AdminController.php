<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityLog;
use App\Models\InformasiPublik;
use App\Models\Visitor;
use App\Models\KontakKami;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        $agent = new Agent();

        $browserCounts = [];

        Visitor::select('user_agent')->chunk(1000, function ($rows) use (&$browserCounts, $agent) {

            foreach ($rows as $row) {

                $agent->setUserAgent($row->user_agent);

                $browser = $agent->browser();

                $browser = strtolower($agent->browser());

                switch (true) {

                    case str_contains($browser, 'chrome'):
                        $browser = 'Chrome';
                        break;

                    case str_contains($browser, 'edge'):
                        $browser = 'Edge';
                        break;

                    case str_contains($browser, 'firefox'):
                        $browser = 'Firefox';
                        break;

                    case str_contains($browser, 'safari'):
                        $browser = 'Safari';
                        break;

                    case str_contains($browser, 'opera'):
                        $browser = 'Opera';
                        break;

                    default:
                        $browser = 'Others';
                        break;
            }
                $browserCounts[$browser] = ($browserCounts[$browser] ?? 0) + 1;
            }
        });

        $totalVisitors = array_sum($browserCounts);

        $browserStats = collect($browserCounts)
        ->map(function ($count, $browser) use ($totalVisitors) {

            switch ($browser) {

                case 'Chrome':
                    $color = 'primary';
                    $icon = 'chrome';
                    break;

                case 'Firefox':
                    $color = 'warning';
                    $icon = 'firefox';
                    break;

                case 'Safari':
                    $color = 'danger';
                    $icon = 'compass';
                    break;

                case 'Edge':
                    $color = 'info';
                    $icon = 'edge';
                    break;

                default:
                    $color = 'secondary';
                    $icon = 'globe';
                    break;
            }

            return [

                'browser' => $browser,
                'total' => $count,
                'percent' => round(($count/$totalVisitors)*100),

                'color' => $color,
                'icon'  => $icon

            ];
        })
        ->sortByDesc('total')
        ->take(5)
        ->values();

        $pesanBaru = KontakKami::where('is_read', false)
            ->latest()
            ->take(5)
            ->get();

        $totalPesanBaru = KontakKami::where('is_read', false)->count();
        $totalpesanmasuk = KontakKami::count();
        $totaldokumen = InformasiPublik::count();

        $today = Visitor::whereDate('created_at', Carbon::today())->count();

        $thisWeek = Visitor::whereBetween(
            'created_at',
            [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
        )->count();

        $thisMonth = Visitor::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $thisYear = Visitor::whereYear('created_at', now()->year)
            ->count();

        $total = Visitor::count();

        $visitorPerMonth = Visitor::select(
        DB::raw('MONTH(created_at) as bulan'),
        DB::raw('COUNT(*) as total')
            )
            ->whereYear('created_at', now()->year)
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $chartLabels = [];
        $chartData = [];

        for ($i = 1; $i <= 12; $i++) {

            $chartLabels[] = Carbon::create()
                ->month($i)
                ->locale('id')
                ->translatedFormat('F');

            $chartData[] = $visitorPerMonth[$i] ?? 0;
        }

        // sementara pakai visitor sebagai activity log
        $activityLogs = Visitor::latest()
            ->take(10)
            ->get();

        return view('be.index', compact(
            'browserStats',
            'pesanBaru',
            'totalPesanBaru',
            'totalpesanmasuk',
            'totaldokumen',
            'today',
            'thisWeek',
            'thisMonth',
            'thisYear',
            'total',
            'chartLabels',
            'chartData',
            'activityLogs'
        ));
    }
}
