<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loainv extends Model
{
    protected $table = 'loainvs';
    public function dsnhanvien(){
        return $this->hasMany('App\nhanvien','idlnv','id');
    }
}
