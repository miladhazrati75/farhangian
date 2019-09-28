<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    ////////
//    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
