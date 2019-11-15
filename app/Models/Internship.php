<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student', 'studentID');
    }
    public function school()
    {
        return $this->belongsTo('App\Models\School', 'schoolID');
    }
    public function professor()
    {
        return $this->belongsTo('App\Models\Professor', 'professorID');
    }
}
