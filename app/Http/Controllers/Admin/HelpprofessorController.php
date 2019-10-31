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

    public function editHelpprofessor($helpprofessor_id)
    {
        if ($helpprofessor_id && ctype_digit($helpprofessor_id)){
            $helpprofessorItem = Helpprofessor::find($helpprofessor_id);
            if ($helpprofessorItem && $helpprofessorItem instanceof Helpprofessor){
               return view('AdminViews/helpprofessors/edit-helpprofessor',compact('helpprofessorItem'));
            }
        }
    }

    public function updateHelpprofessor($helpprofessor_id)
    {
        $helpprofessor_data = [
            'name'=>request()->input('name'),
            'familyname'=>request()->input('family'),
            'password'=>request()->input('password'),
            'personalCode'=>request()->input('personal_code'),
            'NationalCode'=>request()->input('National_Code'),
            'gerayesh'=>request()->input('gherayesh'),
            'tahsilat'=>request()->input('tahsilat')
        ];
        $helpprofessor=Helpprofessor::find($helpprofessor_id);
        $helpprofessor->update($helpprofessor_data);
        if ($helpprofessor){
            return redirect()->route('helpprofessor-list')->with('success','استاد راهنمای مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }
}
