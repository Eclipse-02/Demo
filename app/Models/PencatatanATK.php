<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PencatatanATK extends Model
{
    use HasFactory;
    protected $table = 'pencatatan_atks';
    protected $fillable = [
        'nama_barang',
        'satuan',
        'harga_barang',
        'jumlah',
        'sumber_dana',
        'pj',
    ];
}
