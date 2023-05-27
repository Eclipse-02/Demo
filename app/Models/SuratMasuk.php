<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'pengirim',
        'tanggal_surat',
        'kode_surat',
        'urut_surat',
        'lembaga_surat',
        'bulan_surat',
        'tahun_surat',
        'no_surat',
        'perihal',
        'isi_surat'
    ];
}
