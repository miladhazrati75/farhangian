<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Student;
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

    public function editProfessor($professor_id)
    {
        if ($professor_id && ctype_digit($professor_id)){
            $professorItem= Professor::find($professor_id);
            if ($professorItem && $professorItem instanceof Professor){
                return view('site/Professors/edit',compact('professorItem'));
            }
        }
    }

    public function updateProfessor($professor_id)
    {
        $professor_data=[
          'name' => request()->input('name'),
          'family' => request()->input('family'),
          'Professor_Code' => request()->input('Professor_Code'),
          'National_Code' => request()->input('National_Code'),
          'education' => request()->input('education')
        ];
        $professor = Professor::find($professor_id);
        $professor->update($professor_data);
        if($professor){
           return redirect()->route('Professors-list')->with('success','اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }

    public function deleteProfessor($professor_id)
    {
        if ($professor_id && ctype_digit($professor_id)){
            $professor = Professor::find($professor_id);
            if ($professor && $professor instanceof Professor){
                $professor->delete();
                return redirect()->route('Professors-list');
            }

        }
    }
}
