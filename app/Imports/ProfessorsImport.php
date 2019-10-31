<?php

namespace App\Imports;

use App\Models\Professor;
use Maatwebsite\Excel\Concerns\ToModel;

class ProfessorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Professor([
            'name' =>$row[0],
            'family' =>$row[1],
            'Professor_Code' =>$row[2],
            'National_Code' =>$row[3],
            'education' =>$row[4],
        ]);
    }
}
