<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profileStudent()
    {
        return view('StudentViews/site/profile-student/profile');
    }
}
