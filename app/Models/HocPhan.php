<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HocPhan extends Model
{
    use HasFactory;

    protected $table = 'don_xin_vang';

    protected $fillable = [
        'ma_hoc_phan',
        'ten_hoc_phan',
        'don_vi_hoc_tap'
    ];
}
