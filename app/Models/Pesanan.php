<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    protected $fillable = [
        'id', 'ketua_id', 'kode_pesanan', 'tanggal_pesan', 'maksimal_pembayaran', 'status_pemesanan', 'jumlah_tiket', 'biaya_tiket',
        'total_harga', 'upload_bukti',
    ];

    public function wisatawan()
    {
        return $this->belongsTo(Wisatawan::class, 'ketua_id', 'id');
    }

    public function notifikasis()
    {
        return $this->hasMany(notifikasi::class);
    }
    public function cetakpdfs()
    {
        return $this->hasMany(Cetak_pdf::class);
    }
}
