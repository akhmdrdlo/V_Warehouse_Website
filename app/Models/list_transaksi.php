<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_transaksi extends Model
{
    use HasFactory;
    protected $table = 'list_transaksi';
    protected $fillable = [
        'id',
        'tgl_transaksi',
        'merek',
        'nama',
        'jumlah_transaksi',
        'nominal',
    ];

    
    protected $dates = ['created_at', 'updated_at'];
}
