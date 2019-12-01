<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;
use App\Models\Student;
use App\Models\School;

class Internship extends Model
{
    ////////
    //    protected $connection = 'mysql-utf8';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'studentID');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'schoolID');
    }
    public function professor()
    {
        return $this->belongsTo(Professor::class, 'professorID');
    }
}
