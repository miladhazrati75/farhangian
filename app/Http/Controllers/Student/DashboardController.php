<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StudentNotification;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $studentID = 1;
        $count = StudentNotification::where("studentID", $studentID)->count();
        $notifications = StudentNotification::where("studentID", $studentID)->get();
        return view('StudentViews/site/directory/dashboard', compact('notifications', 'count'));
    }
}
