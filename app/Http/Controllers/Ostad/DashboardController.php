<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view('OstadViews/site/directory/Dashboard');
    }
}
