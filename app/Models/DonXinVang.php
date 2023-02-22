<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonXinVang extends Model
{
    use HasFactory;

    protected $table = 'don_xin_vang';

    protected $fillable = [
        'ma_hoc_ky_nam',
        'ma_nguoi_dung',
        'ma_nhom',
        'ten_giang_vien',
        'ly_do',
        'giay_xac_nhan',
        'trang_thai',
        'y_kien',
    ];
}
