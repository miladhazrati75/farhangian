<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'cities';

    public function school()
    {
        return $this->hasMany('App\School', 'schoolID');
    }
    public function province()
    {
        return $this->belongsTo('App\Province', 'provinceID');
    }
}
