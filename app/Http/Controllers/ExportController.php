<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Exports\ProfessorsExport;
use App\Exports\HelpprofessorsExport;
use App\Exports\PlacesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportStudents()
    {
        $headings = [
            'name',
            'family',
            'student_code',
            'National_Code',
            'mobileNumber',
            'reshte',
            'term'
        ];
        return Excel::download(new StudentsExport($headings), 'students.csv');
    }
    public function exportProfessors()
    {
        $headings = [
            'name',
            'family',
            'Professor_Code',
            'National_Code',
            'education'
        ];
        return Excel::download(new ProfessorsExport($headings), 'professors.csv');
    }
    public function exportHelpprofessors()
    {
        $headings = [
            'name',
            'familyname',
            'password',
            'personalCode',
            'NationalCode',
            'gerayesh',
            'tahsilat'
        ];
        return Excel::download(new HelpprofessorsExport($headings), 'helpprofessors.csv');
    }
    public function exportPlaces()
    {
        $headings = [
            'nameSchool',
            'address',
            'phone',
            'managerName',
            'capacity'
        ];
        return Excel::download(new PlacesExport($headings), 'places.csv');
    }
}
