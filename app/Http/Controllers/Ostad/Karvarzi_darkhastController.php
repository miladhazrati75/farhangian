<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Student;
use Illuminate\Http\Request;

class Karvarzi_darkhastController extends Controller
{
    public function sabt_karvarzi()
    {
        $professorID = 1;
        $students = Student::where('professorID', $professorID)->get();
        return view('OstadViews/site/darkhast-karvarzi/list-sabt-karvarzi', compact('students'));
    }
    public function karvarzi()
    {
        return view('OstadViews/site/darkhast-karvarzi/sabt-karvarzi');
    }

    public function nahaii_karvarzi()
    {
        $provinces = Province::all();
        return view('OstadViews/site/darkhast-karvarzi/nahaii-karvarzi', compact('provinces'));
    }
}
