<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'name' => $row[0],
            'family' => $row[1],
            'National_Code' => $row[2],
            'student_code' => $row[3],
            'mobileNumber' => $row[4],
            'reshte' => $row[5],
            'term' => $row[6],
        ]);
    }
}
