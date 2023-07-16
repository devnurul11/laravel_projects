<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function DashboardPage(){
        return view('pages.dashboard.dashboard-page');
    }
}
