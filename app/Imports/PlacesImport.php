<?php

namespace App\Imports;

use App\Models\Place;
use Maatwebsite\Excel\Concerns\ToModel;

class PlacesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Place([
            'nameSchool' => $row[0],
            'address' => $row[1],
            'phone' => $row[2],
            'managerName' => $row[3],
            'capacity' => $row[4]
        ]);
    }
}
