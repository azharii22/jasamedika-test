<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "pasiens";
    protected $fillable = [
        'nama',
        'alamat',
        'no_telp',
        'rt',
        'rw',
        'jk',
        'tgl_lahir',
        'id_kel',
        'id_pasien'
    ];

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kel');
    }
}
