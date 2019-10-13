<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function Dashbord()
    {
        return view('site/directory/dashboard');
    }
}
