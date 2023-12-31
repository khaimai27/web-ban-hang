<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = "sanpham";
    public function loaisanpham(){
        return $this->beLongsTo(LoaiSanPham::class);
    }
}
