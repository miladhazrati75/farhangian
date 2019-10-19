<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Karvarzi_darkhastController extends Controller
{
    public function karvarzi()
    {
        return view('StudentViews/site/darkhast-karvarzi/karvarzi');
    }
}
