<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\School;
use App\Models\Province;

class City extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $table = 'cities';

    public function school()
    {
        return $this->hasMany(School::class, 'schoolID');
    }
    public function province()
    {
        return $this->belongsTo(Province::class, 'provinceID');
    }
}
