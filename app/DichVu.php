<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table= 'tbl_dichvu';
    protected $fillable = ['id_dichvu','tendichvu','idtendichvu','mota','ngaydat'];
    public $timestamps = true;
}
