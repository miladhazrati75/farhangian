<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\School;
use App\Models\Professor;

class Student extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function school()
    {
        return $this->belongsTo(School::class, 'schoolID');
    }
    public function professor()
    {
        return $this->belongsTo(Professor::class, 'professorID');
    }
}
