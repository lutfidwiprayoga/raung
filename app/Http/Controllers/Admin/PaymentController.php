<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Wisatawan\PaymentMailAcc;
use App\Mail\Wisatawan\PaymentMailTolak;
use App\Models\Cetak_pdf;
use App\Models\Kuota;
use App\Models\Notifikasi;
use App\Models\Pesanan;
use App\Models\Wisatawan;
use App\Models\WisatawanAnggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $pesanan = Pesanan::latest()->where('status_pemesanan', 'Pengajuan')->orderBy('tanggal_pesan', 'asc')->when(
            request()->cari,
            function ($pesanan) {
                $pesanan = $pesanan->where('nama', 'like', '%' . request()->cari . '%');
            }
        )->paginate(10);
        return view('admin.wisatawan.index', compact('pesanan'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::find($id);
        $pdf = Cetak_pdf::find($id);
        $wisatawan = Wisatawan::where('id', $pesanan->ketua_id)->first();
        $anggota = WisatawanAnggota::where('ketua_id', $wisatawan->id)->get();
        // dd($anggota);
        return view('admin.wisatawan.detail', compact('wisatawan', 'anggota', 'pesanan', 'pdf'));
    }
    public function tolak($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan->status_pemesanan = 'Ditolak';
        $pesanan->save();
        $notif = Notifikasi::find($id);
        $notif->read = True;
        $notif->save();
        $data = array(
            'nama' => $pesanan->wisatawan->nama,
        );
        Mail::to($pesanan->wisatawan->email)->send(new PaymentMailTolak($data));
        return redirect()->route('admin.payment');
    }
    public function terima($id)
    {
        $pesanan = Pesanan::where('id', $id)->first();
        $pesanan->status_pemesanan = 'Disetujui';
        $pesanan->save();
        $notif = Notifikasi::find($id);
        $notif->read = True;
        $notif->save();
        $kuota = Kuota::where('id', $pesanan->wisatawan->tanggal_naik)->first();
        $kuota->kuota -= $pesanan->jumlah_tiket;
        $kuota->save();
        $data = array(
            'nama' => $pesanan->wisatawan->nama,
        );
        Mail::to($pesanan->wisatawan->email)->send(new PaymentMailAcc($data));
        return redirect()->route('admin.payment');
    }
}
