<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;

class DashboardController extends Controller
{
    public function Dashbord()
    {
        $count = Notification::all()->count();
        $notifications = Notification::all();
        return view('site/directory/dashboard', compact('notifications', 'count'));
    }
}
