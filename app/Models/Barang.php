<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'data_barang';
    protected $fillable = [
        'No_resi',
        'Pengirim',
        'Alamat_tujuan',
        'Penerima',
        'Status_pengiriman',
        'Photo'
    ];
}
