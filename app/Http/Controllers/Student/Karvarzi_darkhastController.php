<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Internship;

class Karvarzi_darkhastController extends Controller
{
    public function karvarzi()
    {
        $provinces = Province::all();
        return view('StudentViews/site/darkhast-karvarzi/karvarzi', compact("provinces"));
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
