<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardIndexController extends DashboardController
{
    protected $active = 'dashboard';

    public function index()
    {
        $this->page('Ringkasan', 'dashboard.index');
        return view('dashboard/index');
    }
}
