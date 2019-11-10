<?php

namespace App\Imports;

use App\Models\Helpprofessor;
use Maatwebsite\Excel\Concerns\ToModel;

class HelpprofessorsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Helpprofessor([
            'name'=> $row[0],
            'familyname'=> $row[1],
            'password'=> $row[2],
            'personalCode'=> $row[3],
            'NationalCode'=> $row[4],
            'gerayesh'=> $row[5],
            'tahsilat'=> $row[6],
        ]);
    }
}
