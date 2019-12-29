<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use App\Models\ProfessorNotification;
use App\Models\Province;
use App\Models\Student;
use App\Models\StudentNotification;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    public function index()
    {
        $professorID = 1;
        $students = Student::where("professorID", $professorID)->get();
        $provinces = Province::all();
        $count = ProfessorNotification::where("professorID", $professorID)->count();
        $notifications = ProfessorNotification::where("professorID", $professorID)->get();
        return view('OstadViews/site/darkhast-karvarzi/sabt-karvarzi', compact("students", "provinces", "notifications", "count"));
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
        $notification = [
            'studentID' => request()->input('student'),
            'body' => 'استاد برای شما کارورزی ثبت کرده است.',
            'type' => 'internship'
        ];
        $new_internship_object = Internship::create($internship_data);
        if ($new_internship_object && $new_internship_object instanceof Internship) {
            $new_notification_object = StudentNotification::create($notification);
            return redirect()->route('ostad-sabtshodeh')->with('success', 'کارورزی دانشجوی مورد نظر با موفقیت اضافه شد');
        }
    }

    public function deleteInternship($studentID,$internshipID)
    {
        $notification = [
            'studentID' => $studentID,
            'body' => 'استاد کارورزی شما را حذف کرده است.',
            'type' => 'internship'
        ];
        if ($internshipID && ctype_digit($internshipID)) {
            $internship = Internship::find($internshipID);
            if ($internship && $internship instanceof Internship) {
                $internship->delete();
                $new_notification_object = StudentNotification::create($notification);
                return redirect()->route('ostad-sabtshodeh');
            }
        }
    }
}
