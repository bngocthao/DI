<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YKien extends Model
{
    use HasFactory;

    protected $table = 'y_kien';

    protected $fillable = [
        'y_kien',
        'trang_thai'
    ];
}
