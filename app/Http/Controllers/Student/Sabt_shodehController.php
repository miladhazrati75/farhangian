<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Sabt_shodehController extends Controller
{
    public function sabt()
    {
        return view('/StudentViews/site/sabt-shodeh/sabt');
    }
}
