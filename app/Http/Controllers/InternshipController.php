<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;

class InternshipController extends Controller
{
    public function index()
    {
        $professorID = '1';
        if ($professorID && ctype_digit($professorID)) {
            //$internships = Internship::with('professor')->where('professorID', $professorID)->get()->toArray();
            //if ($internships && $internships instanceof Internship) {
            $internships = Internship::with('school.city.province')->get()->toArray();
            dd($internships);
            return view('OstadViews/site/darkhast-karvarzi/list-sabt-karvarzi', compact('internships'));
            //}
        }
    }
}
