<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use App\Imports\ProfessorsImport;
use App\Imports\HelpprofessorsImport;
use App\Imports\PlacesImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function importStudents()
    {
        Excel::import(new StudentsImport,request()->file('file'));

        return back();
    }
    public function importProfessors()
    {
        Excel::import(new ProfessorsImport,request()->file('file'));

        return back();
    }
    public function importPlaces()
    {
        Excel::import(new PlacesImport,request()->file('file'));

        return back();
    }
    public function importHelpprofessors()
    {
        Excel::import(new HelpprofessorsImport,request()->file('file'));

        return back();
    }
}
