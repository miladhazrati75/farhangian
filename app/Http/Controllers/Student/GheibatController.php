<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gheibat;
use App\Models\StudentNotification;

class GheibatController extends Controller
{
    public function list()
    {
        $gheibatha = Gheibat::all();
        $studentID = 1;
        $count = StudentNotification::where("studentID", $studentID)->count();
        $notifications = StudentNotification::where("studentID", $studentID)->get();
        return view('StudentViews/site/gheibat/gheibat', compact('gheibatha', 'notifications', 'count'));
    }
}
