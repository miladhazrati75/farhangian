<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class Sabt_shodehController extends Controller
{
    public function sabt()
    {
        $professorID = 1;
        $internships = Internship::with('school.city')->with('student')->where("professorID", $professorID)->get();
        return view('OstadViews/site/sabt-shodeh/sabt', compact('internships'));
    }
}
