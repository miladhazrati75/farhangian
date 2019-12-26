<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\ProfessorNotification;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $professorID = 1;
        $count = ProfessorNotification::where("professorID", $professorID)->count();
        $notifications = ProfessorNotification::where("professorID", $professorID)->get();
        return view('OstadViews/site/directory/Dashboard', compact('notifications', 'count'));
    }
}
