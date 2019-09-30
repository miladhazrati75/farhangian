<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorsController extends Controller
{
    public function ProfessorsList(){
        $professors = Professor::all();
        return view('site/Professors/Professors-list',compact('professors'));
    }
    public function addProfessor()
    {
        return view('site/Professors/add-professor');
    }

    public function createProfessor(Request $request)
    {
        $professor_data = [
            'name' =>request()->input('name'),
            'family' =>request()->input('family'),
            'Professor_Code' =>request()->input('Professor_Code'),
            'National_Code' =>request()->input('National_Code'),
            'education' =>request()->input('education'),
        ];
        $new_professor_object= Professor::create($professor_data);
        if ($new_professor_object && $new_professor_object instanceof Professor){
            return redirect()->route('Professors-list');
        }
    }
}
