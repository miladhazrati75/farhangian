<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gheibat;

class GheibatController extends Controller
{
    public function list()
    {
        $gheibatha = Gheibat::all();
        return view('StudentViews/site/gheibat/gheibat', compact('gheibatha'));
    }
}
