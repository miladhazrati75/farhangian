<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\StudentNotification;

class ReportController extends Controller
{
    public function report()
    {
        $studentID = 1;
        $count = StudentNotification::where("studentID", $studentID)->count();
        $notifications = StudentNotification::where("studentID", $studentID)->get();
        return view('StudentViews/site/report-karvarzi/report', compact('notifications', 'count'));
    }
    public function createReport()
    {
        $report_data = [
            'startDate' => request()->input('startDate'),
            'endDate' => request()->input('endDate'),
            'school_id' => request()->input('schoolName'),
            'hours' => request()->input('hours'),
        ];
        $new_report_object = Student::create($report_data);
        if ($new_report_object && $new_report_object instanceof Report) {
            return redirect()->route('dashboard');
        }
    }
}
