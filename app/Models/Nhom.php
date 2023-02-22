<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhom extends Model
{
    use HasFactory;

    protected $table = 'nhom';

    protected $fillable = [
        'ma_hoc_phan',
        'nhom'
    ];
}
