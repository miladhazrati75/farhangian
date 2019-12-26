<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use App\Models\ProfessorNotification;
use App\Models\Province;
use App\Models\Student;
use App\Models\StudentNotification;
use Illuminate\Http\Request;

class Karvarzi_darkhastController extends Controller
{
    public function sabt_karvarzi()
    {
        $professorID = 1;
        $count = ProfessorNotification::where("professorID", $professorID)->count();
        $notifications = ProfessorNotification::where("professorID", $professorID)->get();
        $internships = Internship::with('school.city')->with('student')->where("professorID", $professorID)->get();
        return view('OstadViews/site/darkhast-karvarzi/list-sabt-karvarzi', compact("internships", "notifications", "count"));
    }
    public function karvarzi()
    {
        $professorID = 1;
        $count = ProfessorNotification::where("professorID", $professorID)->count();
        $notifications = ProfessorNotification::where("professorID", $professorID)->get();
        return view('OstadViews/site/darkhast-karvarzi/sabt-karvarzi', compact("notifications", "count"));
    }

    public function nahaii_karvarzi($student_id)
    {
        $professorID = 1;
        $studentItem = Student::find($student_id);
        $provinces = Province::all();
        $count = ProfessorNotification::where("professorID", $professorID)->count();
        $notifications = ProfessorNotification::where("professorID", $professorID)->get();
        return view('OstadViews/site/darkhast-karvarzi/nahaii-karvarzi', compact('provinces', 'studentItem', 'notifications', 'count'));
    }
    public function sabtnahaii_karvarzi($student_id)
    {
        $internship_data = [
            'studentID' => $student_id,
            'professorID' => 1,
            'schoolID' => request()->input('school'),
            'startDate' => request()->input('startDate'),
            'status' => 'ok'
        ];
        $notification = [
            'studentID' => $student_id,
            'body' => 'درخواست کارورزی شما توسط استاد تایید شد.',
            'type' => 'internship'
        ];
        $new_internship_object = Internship::where("studentID", $student_id)->update($internship_data);
        if ($new_internship_object && $new_internship_object instanceof Internship) {
            $new_notification_object = StudentNotification::create($notification);
            return redirect()->route('ostad-sabtshodeh')->with('success', 'کارورزی دانشجوی مورد نظر با موفقیت قطعی شد');
        }
    }
}
