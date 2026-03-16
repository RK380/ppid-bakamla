<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\KontakKami;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {

            $pesanBaru = KontakKami::where('is_read',false)
                            ->latest()
                            ->take(5)
                            ->get();

            $totalPesanBaru = KontakKami::where('is_read',false)->count();

            $view->with(compact('pesanBaru','totalPesanBaru'));

        });
    }
}
