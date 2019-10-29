<?php

namespace App\Http\Controllers\Admin;

use App\Models\Helpprofessor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpprofessorController extends Controller
{

    public function helpprofessorlist(){
        $helpprofessors = Helpprofessor::all();
        return view('AdminViews/helpprofessors/helpprofessor-list',compact('helpprofessors'));
    }
}
