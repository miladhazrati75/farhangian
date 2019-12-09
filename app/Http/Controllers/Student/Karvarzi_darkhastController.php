<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Internship;

class Karvarzi_darkhastController extends Controller
{
    public function karvarzi()
    {
        $provinces = Province::all();
        return view('StudentViews/site/darkhast-karvarzi/karvarzi', compact("provinces"));
    }
}
