<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penjualan',
        'id_user',
        'nama_buku',
        'harga',
        'qty',
    ];
}
