<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    protected $table = 'chitiethoadons';
    public function hoadon(){
        return $this->hasOne('App\hoadon','id','idhd');
    }
}
