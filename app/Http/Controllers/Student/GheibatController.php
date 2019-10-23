<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GheibatController extends Controller
{
    public function list()
    {
        return view('StudentViews/site/gheibat/gheibat');
    }
}
