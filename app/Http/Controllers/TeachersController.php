<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function teacherList(){
        return view('site/teachers/teachers-list');
    }
}
