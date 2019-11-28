<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolsController extends Controller
{
    public function masterpage()
    {
        return view('layout/main');
    }

    public function allOfSchools()
    {
        $school = School::all();
        return view('AdminViews/students/students-list', compact('schools'));
    }

    public function deleteSchools($school_id)
    {
        if ($school_id && ctype_digit($school_id)) {
            $school = School::find($school_id);
            if ($school && $school instanceof School) {
                $school->delete();
                return redirect()->route('student-list');
            }
        }
    }

    public function editSchool($school_id) //Request $request)
    {
        //$student_id = $request->input('id');
        if ($school_id && ctype_digit($school_id)) {
            $schoolItem = School::find($school_id);
            if ($schoolItem && $schoolItem instanceof School) {
                //return view('site/students/edit', compact('studentItem'));
                return view('AdminViews/students/edit', compact('schoolItem'));
            }
        }
    }

    public function updateSchool($school_id)
    {
        $school_data = [
            'provinceID' => request()->input('provinceID'),
            'title' => request()->input('title'),
        ];
        $school = School::find($school_id);
        $school->update($school_data);
        if ($school) {
            return redirect()->route('student-list')->with('success', 'اطلاعات دانشجوی مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }

    public function addSchool()
    {
        return view('AdminViews/students/add-user');
    }

    public function createSchool(Request $request)
    {
        $school_data = [
            'provinceID' => request()->input('provinceID'),
            'title' => request()->input('title'),
        ];
        $new_School_object = School::create($school_data);
        if ($new_School_object && $new_School_object instanceof School) {
            return redirect()->route('student-list')->with('success', 'دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }
}
