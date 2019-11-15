<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasMany('App\Models\Student', 'professorID');
    }
    public function internship()
    {
        return $this->hasMany('App\Models\Internship', 'internshipID');
    }
}
