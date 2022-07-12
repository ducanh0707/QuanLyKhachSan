<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $timestamps =false ; 
    protected $fillable = [
        'slider_name','lider_image','slider_status','slider_desc'
    ];
    protected $primaryKey = 'slider_id';
    protected $table = 'tbl_slider';
}
