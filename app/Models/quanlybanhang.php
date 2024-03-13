<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quanlybanhang extends Model
{
    use HasFactory;
    protected $table = 'quanlyhanghoa';
    public $timestamps = false;
    protected $fillables = [
       'TenDanhMuc','DanhMucThietYeu',
    ];
}
