<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'tbl_customer';
    protected $fillable = [
         'email', 'id_dondat','sdt_kh',
    ];

}
