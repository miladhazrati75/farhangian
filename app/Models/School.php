<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasMany('App\Models\Student', 'schoolID');
    }
    public function city()
    {
        return $this->belongsTo('App\Models\City', 'cityID');
    }
}
