<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarPeriksa extends Model
{
    protected $table = 'daftar_periksa';

    protected $fillable = [
        'user_id',
        'dokter_id',
        'keluhan',
        'tanggal_periksa',
        'status',
    ];

    public function pasien()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id');
    }
}
