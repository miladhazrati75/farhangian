<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $primaryKey = 'id';
    protected $guarded= ['id'];
}
