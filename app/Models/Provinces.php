<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function city()
    {
        return $this->hasMany('App\City', 'cityID');
    }
}
