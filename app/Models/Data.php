<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';

    protected $fillable = [
        'id_recap',
        'nama',
        'tanggal',
        'tanggal_registrasi',
        'nomor_PBG',
        'no_PBG',
        'alamat',
        'RT',
        'RW',
        'kelurahan',
        'IRK',
        'luas_lahan',
        'luas_lahan_sertifikat',
        'jumlah_lantai',
        'fungsi_bangunan',
        'penggunaan_bangunan',
        'status',
        'pbg_terbit',
        'no_pbg_terbit',
    ];

    protected $casts = [
        'IRK' => 'array',
    ];

    public $incrementing = false;
    protected $primaryKey = 'id_recap';
    protected $keyType = 'string';
}
