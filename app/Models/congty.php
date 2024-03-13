<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class congty extends Model
{
    use HasFactory;
    protected $table = 'congty';
    public $timestamps = false;
    protected $fillables = [
        'TenHang','DonViTinh','Soluong','GiaNhap','GiaBan'
    ];
}
