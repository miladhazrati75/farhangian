<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\City;

class School extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasMany(Student::class, 'schoolID');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'cityID');
    }
}
