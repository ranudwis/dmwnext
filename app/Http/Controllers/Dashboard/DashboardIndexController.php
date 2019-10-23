<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardIndexController extends DashboardController
{
    protected $title = 'Dashboard';
    protected $active = 'dashboard';
    protected $breadcrumb_name = 'dashboard.index';

    public function index()
    {
        return view('dashboard/index');
    }
}
