<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Internship;
use App\Models\StudentNotification;

class Karvarzi_darkhastController extends Controller
{
    public function karvarzi()
    {
        $provinces = Province::all();
        $studentID = 1;
        $count = StudentNotification::where("studentID", $studentID)->count();
        $notifications = StudentNotification::where("studentID", $studentID)->get();
        return view('StudentViews/site/darkhast-karvarzi/karvarzi', compact("provinces","notifications", "count"));
    }
    public function saveInternship()
    {
        $internship_data = [
            'studentID' => 2,
            'professorID' => 1,
            'schoolID' => request()->input('school'),
            'startDate' => request()->input('startDate'),
            'status' => "requested",
        ];
        $new_internship_object = Internship::create($internship_data);
        if ($new_internship_object && $new_internship_object instanceof Internship) {
            return redirect()->route('student-list')->with('success', 'کارورزی با موفقیت اضافه شد');
        }
    }
}
