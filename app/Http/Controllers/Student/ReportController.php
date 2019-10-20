<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ReportController extends Controller
{
    public function report()
    {
        return view('StudentViews/site/report-karvarzi/report');
    }
}
