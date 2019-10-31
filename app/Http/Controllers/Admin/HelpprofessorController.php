<?php

namespace App\Http\Controllers\Admin;

use App\Models\Helpprofessor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpprofessorController extends Controller
{

    public function helpprofessorlist(){
        $helpprofessors = Helpprofessor::all();
        return view('AdminViews/helpprofessors/helpprofessor-list',compact('helpprofessors'));
    }

    public function addHelpproferssor()
    {
        return view('AdminViews/helpprofessors/add-helpprofessor');
    }

    public function createHelpprofessor(Request $request)
    {
        $helpprofessor_data = [
        'name'=> request()->input('name'),
        'familyname'=> request()->input('family'),
        'password'=> request()->input('password'),
        'personalCode'=> request()->input('personal_code'),
        'NationalCode'=> request()->input('National_Code'),
        'gerayesh'=> request()->input('gherayesh'),
        'tahsilat'=> request()->input('tahsilat'),
        ];
        $new_helpprofessor_object= Helpprofessor::create($helpprofessor_data);

        if ($new_helpprofessor_object && $new_helpprofessor_object instanceof Helpprofessor){
            return redirect()->route('helpprofessor-list');
        }
    }

    public function editHelpprofessor()
    {
        return view('AdminViews/helpprofessors/edit-helpprofessor');
    }

    public function updateHelpprofessor($helpprofessor_id)
    {

    }
}
