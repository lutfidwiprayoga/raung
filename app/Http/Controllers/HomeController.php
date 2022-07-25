<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\Tiket;
use App\Models\User;
use App\Models\Wisatawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tiket = Tiket::get();
        $riwayat = Notifikasi::where('read', '=', true)
            ->join('pesanans', 'notifikasis.pesanan_id', '=', 'pesanans.id')
            ->orderBy('pesanans.tanggal_pesan', 'asc')
            ->get();
        $total_guide = User::where('level', 'guide')->get();
        $wisatawan = Wisatawan::first();
        if (Auth::user()->level == 'admin') { // Level Admin   
            return view('admin.home', compact('total_guide', 'tiket', 'riwayat'));
        } elseif (Auth::user()->level == 'wisatawan') { // Level Wisatawan
            return view('frontend.beranda', compact('wisatawan'));
        }
    }
}
