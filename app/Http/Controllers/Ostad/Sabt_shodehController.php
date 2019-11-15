<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sabt_shodehController extends Controller
{
    public function sabt()
    {
        return view('OstadViews/site/sabt-shodeh/sabt');
    }
}
