<?php

namespace App\Providers;

use App\Models\notifikasi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
        Carbon::parse('2019-03-01')->translatedFormat('d F Y'); // Output: "01 Maret 2019"
        now()->subMinute(5)->diffForHumans();

        view()->composer('*', function ($view) {
            $notifikasi = null;
            if (Auth::user() != null) {
                if (Auth::user()->level == 'admin') {
                    $notifikasi = Notifikasi::with('pesanan')->where('Read', '=', false)
                        ->get();
                }
            }
            $view->with(['notifikasi' => $notifikasi]);
        });
    }
}
