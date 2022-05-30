<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSMCoordinatorController extends Controller
{
    public function homepage()
    {
        return view('coordinator.PSMCoordinatorHomepage');
    }

    public function profile()
    {
        return view('dashboards.coordinators.profile');
    }

    public function settings()
    {
        return view('dashboards.coordinators.settings');
    }

}
