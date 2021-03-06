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
    public function getSchools()
    {
        if (\Illuminate\Support\Facades\Request::ajax()) {
            $cityID = $_GET["cityID"];
            $schools = School::where('cityID', $cityID)->get();
            return $schools;
        }
    }
    public function updateSchool($school_id)
    {
        $school_data = [
            'userID' => request()->input('userID'),
            'cityID' => request()->input('cityID'),
            'school_code' => request()->input('school_code'),
            'username' => request()->input('username'),
            'password' => request()->input('password'),
            'school_name' => request()->input('school_name'),
            'school_address' => request()->input('school_address'),
        ];
        $school = School::find($school_id);
        $school->update($school_data);
        if ($school) {
            return redirect()->route('student-list')->with('success', 'اطلاعات مدرسه مورد نظر شما با موفقیت به روز رسانی شد');
        }
    }

    public function addSchool()
    {
        return view('AdminViews/students/add-user');
    }

    public function createSchool(Request $request)
    {
        $school_data = [
            'userID' => request()->input('userID'),
            'cityID' => request()->input('cityID'),
            'school_code' => request()->input('school_code'),
            'username' => request()->input('username'),
            'password' => request()->input('password'),
            'school_name' => request()->input('school_name'),
            'school_address' => request()->input('school_address'),
        ];
        $new_School_object = School::create($school_data);
        if ($new_School_object && $new_School_object instanceof School) {
            return redirect()->route('student-list')->with('success', 'مدرسه مورد نظر با موفقیت اضافه شد');
        }
    }
}
