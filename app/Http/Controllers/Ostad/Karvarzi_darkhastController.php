<?php

namespace App\Http\Controllers\Ostad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Karvarzi_darkhastController extends Controller
{
    public function sabt_karvarzi()
    {
        return view('OstadViews/site/darkhast-karvarzi/list-sabt-karvarzi');
    }
    public function karvarzi()
    {
        return view('OstadViews/site/darkhast-karvarzi/sabt-karvarzi');
    }

    public function nahaii_karvarzi()
    {
        return view('OstadViews/site/darkhast-karvarzi/nahaii-karvarzi');
    }
}
