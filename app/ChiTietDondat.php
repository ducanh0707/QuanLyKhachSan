<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDondat extends Model
{
    protected $table= 'tbl_chitietdondat';
    protected $fillable = ['id_ctdondat','id_dondat','tu_ngay','category_id','ngaydat','den_ngay','trang_thai','tong_tien','tthai_ttoan'];
    public $timestamps = true;
}
