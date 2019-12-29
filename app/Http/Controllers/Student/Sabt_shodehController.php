<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\StudentNotification;

class Sabt_shodehController extends Controller
{
    public function sabt()
    {
        $studentID = 1;
        $count = StudentNotification::where("studentID", $studentID)->count();
        $notifications = StudentNotification::where("studentID", $studentID)->get();
        return view('/StudentViews/site/sabt-shodeh/sabt', compact('notifications', 'count'));
    }
}
