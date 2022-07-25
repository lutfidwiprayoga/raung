<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetak_pdf extends Model
{
    use HasFactory;
    protected $table = 'cetak_pdfs';
    protected $fillable = ['pesanan_id', 'ketua_id'];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }
    public function wisatawan()
    {
        return $this->belongsTo(Wisatawan::class, 'ketua_id', 'id');
    }
}
