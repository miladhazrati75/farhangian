<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
   public function placeList(){
       return view('site/place/placeList');
   }
}
