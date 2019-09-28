<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorsController extends Controller
{
    public function ProfessorsList(){
        $professors = Professor::all();
        return view('site/Professors/Professors-list',compact('professors'));
    }
}
