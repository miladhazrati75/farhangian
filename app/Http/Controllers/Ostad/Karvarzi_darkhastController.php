<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use App\Models\Province;
use App\Models\Student;
use Illuminate\Http\Request;

class Karvarzi_darkhastController extends Controller
{
    public function sabt_karvarzi()
    {
        $professorID = 1;
        $students = Student::where('professorID', $professorID)->get();
        return view('OstadViews/site/darkhast-karvarzi/list-sabt-karvarzi', compact('students'));
    }
    public function karvarzi()
    {
        return view('OstadViews/site/darkhast-karvarzi/sabt-karvarzi');
    }

    public function nahaii_karvarzi($student_id)
    {
        $studentItem = Student::find($student_id);
        $provinces = Province::all();
        return view('OstadViews/site/darkhast-karvarzi/nahaii-karvarzi', compact('provinces', 'studentItem'));
    }
    public function sabtnahaii_karvarzi($student_id)
    {
        $internship_data = [
            'studentID' => $student_id,
            'professorID' => 1,
            'schoolID' => request()->input('school'),
            'startDate' => request()->input('startDate'),
        ];
        $new_internship_object = Internship::create($internship_data);
        if ($new_internship_object && $new_internship_object instanceof Internship) {
            return redirect()->route('ostad-sabtshodeh')->with('success', 'دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }
}
