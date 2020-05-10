<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListGHeybatha extends Controller
{
    public function listGHeybatha(){
        return view('AdminViews/gheybatha/listGHeybatha');
    }
}
