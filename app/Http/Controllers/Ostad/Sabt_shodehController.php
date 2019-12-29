<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use App\Models\ProfessorNotification;
use Illuminate\Http\Request;

class Sabt_shodehController extends Controller
{
    public function sabt()
    {
        $professorID = 1;
        $count = ProfessorNotification::where("professorID", $professorID)->count();
        $notifications = ProfessorNotification::where("professorID", $professorID)->get();
        $internships = Internship::with('school.city')->with('student')->where("professorID", $professorID)->get();
        return view('OstadViews/site/sabt-shodeh/sabt', compact('internships', 'notifications', 'count'));
    }
}
