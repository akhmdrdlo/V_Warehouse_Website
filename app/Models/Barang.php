<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $table = 'barang';
    protected $fillable = [
        'id',
        'merek',
        'jenis_barang',
        'kategori',
        'stok',
        'lokasi',
    ];

    protected $hidden = [
        'id',
        'remember_token',
    ];
}
