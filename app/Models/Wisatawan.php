<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisatawan extends Model
{
    use HasFactory;
    protected $table = 'wisatawans';
    protected $fillable = [
        'id', 'user_id', 'kebangsaan_id', 'tanggal_naik', 'tanggal_turun', 'jenis_identitas', 'nomor_identitas', 'nama', 'email',
        'tanggal_lahir', 'jenis_kelamin', 'alamat', 'no_hp', 'pekerjaan', 'asal_kota', 'provinsi', 'foto_identitas'
    ];

    public function kuota()
    {
        return $this->belongsTo(Kuota::class, 'tanggal_naik', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function city()
    {
        return $this->belongsTo(city::class, 'asal_kota', 'id');
    }
    public function province()
    {
        return $this->belongsTo(Province::class, 'provinsi', 'id');
    }
    public function kebangsaan()
    {
        return $this->belongsTo(Kebangsaan::class, 'kebangsaan_id', 'id');
    }
    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }
    public function wisatawananggotas()
    {
        return $this->hasMany(WisatawanAnggota::class);
    }
    public function cetakpdfs()
    {
        return $this->hasMany(Cetak_pdf::class);
    }
}
