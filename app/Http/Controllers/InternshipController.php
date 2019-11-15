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
            $internships = Internship::with('professors')->where('professorID', $professorID)->get()->toArray();
            //if ($internships && $internships instanceof Internship) {

            dd($internships);
            return view('OstadViews/site/darkhast-karvarzi/list-sabt-karvarzi', compact('internships'));
            //}
        }
    }
}
