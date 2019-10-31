<?php

namespace App\Exports;

use App\Models\Helpprofessor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HelpprofessorsExport implements FromQuery, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function __construct($headings)
    {
        $this->headings = $headings;
    }
    public function query()
    {
        return Helpprofessor::select($this->headings());
    }

    public function headings() : array
    {
        return $this->headings;
    }
}
