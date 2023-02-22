<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonVi extends Model
{
    use HasFactory;

    protected $table = 'don_vi';

    protected $fillable = [
        'ten_don_vi',
        'cap',
        'don_vi_cha'
    ];
}
