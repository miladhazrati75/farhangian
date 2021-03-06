<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Professor;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class ProfessorsController extends Controller
{
    public function ProfessorsList(){
        $professors = Professor::paginate(10);
        return view('AdminViews/Professors/Professors-list',compact('professors'));
    }

    public function addProfessor()
    {
        return view('AdminViews/Professors/add-professor');
    }
    public function details(Request $request)
    {
        if (\Illuminate\Support\Facades\Request::ajax()) {

            $profId = $_GET["profId"];
            $profItem = Professor::find($profId);
            return $profItem;
        }
    }

    public function searchProfessor()
    {
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $searchValue = $_GET["searchInput"];
            $currentValue = DB::table('professors')->where('Professor_Code', $searchValue)->get();
            return $currentValue;
        }
    }

    public function createProfessor(Request $request)
    {

        $professor_data = [
            'name' =>request()->input('name'),
            'family' =>request()->input('family'),
            'mobileNumber' =>request()->input('mobileNumber'),
            'password' =>request()->input('password'),
            'gerayesh' =>request()->input('gerayesh'),
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
                return view('AdminViews/Professors/edit',compact('professorItem'));
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
          'education' => request()->input('education'),
          'mobileNumber' =>request()->input('mobileNumber'),
          'password' => request()->input('password'),
          'gerayesh' => request()->input('gerayesh')
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
