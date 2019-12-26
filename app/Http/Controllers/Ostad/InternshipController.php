<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use App\Models\Province;
use App\Models\Student;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        $professorID = 1;
        $students = Student::where("professorID", $professorID)->get();
        $provinces = Province::all();
        return view('OstadViews/site/darkhast-karvarzi/sabt-karvarzi', compact("students", "provinces"));
    }

    public function saveInternship()
    {
        $internship_data = [
            'studentID' => request()->input('student'),
            'professorID' => 1,
            'schoolID' => request()->input('school'),
            'startDate' => request()->input('startDate'),
            'status' => 'ok'
        ];
        $new_internship_object = Internship::create($internship_data);
        if ($new_internship_object && $new_internship_object instanceof Internship) {
            return redirect()->route('ostad-sabtshodeh')->with('success', 'کارورزی دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }

    public function deleteInternship($internshipID)
    {
        if ($internshipID && ctype_digit($internshipID)) {
            $internship = Internship::find($internshipID);
            if ($internship && $internship instanceof Internship) {
                $internship->delete();
                return redirect()->route('ostad-sabtshodeh');
            }
        }
    }
}
