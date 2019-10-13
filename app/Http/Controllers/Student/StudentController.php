<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function masterpage()
    {
        return view('StudentViews/layout/main');
    }
}
