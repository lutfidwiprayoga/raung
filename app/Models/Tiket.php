<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tikets';
    protected $fillable = [
        'id', 'nama', 'harga', 'asuransi',
    ];

    public function kebangsaans()
    {
        return $this->hasMany(Kebangsaan::class);
    }
}
