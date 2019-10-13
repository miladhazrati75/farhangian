<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpprofessorController extends Controller
{

    public function helpprofessorlist(){
        return view('AdminViews/helpprofessors/helpprofessor-list');
    }
}
