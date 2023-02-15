<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class VaiTro_NguoiDung extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = 'vaitro_nguoidung';
    protected $fillable = [
        'ma_nguoi_dung',
        'vai_tro'
    ];
}
