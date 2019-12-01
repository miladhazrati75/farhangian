<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Internship;
use App\Models\Student;

class Professor extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasMany(Student::class, 'professorID');
    }
    public function internship()
    {
        return $this->hasMany(Internship::class, 'internshipID');
    }
}
