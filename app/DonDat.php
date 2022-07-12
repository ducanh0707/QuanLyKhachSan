<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonDat extends Model
{
    protected $table= 'tbl_dondat';
    protected $fillable = ['id_dondat','category_id','id_customer','category_id','ngaydat','trangthai','tthai_ttoan'];
    public $timestamps = true;
}
