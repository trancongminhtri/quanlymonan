<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    protected $table = 'loaisps';
    public function dssanpham(){
        return $this->hasMany('App\sanpham','idlsp','id');
    }
}
