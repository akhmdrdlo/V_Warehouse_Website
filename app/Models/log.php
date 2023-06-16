<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $table = 'logs';

    protected $fillable = ['merek', 'uname', 'updated_at'];
    use HasFactory;
}
