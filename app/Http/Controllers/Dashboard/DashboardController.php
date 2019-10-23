<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Breadcrumbs;

class DashboardController extends Controller
{
    protected $title = 'Dashboard';
    protected $active = 'dashboard';
    protected $breadcrumb_name = 'dashboard';
    protected $breadcrumb_parameter = [];

    public function __construct()
    {
        view()->share('breadcrumbs', function () {
            return Breadcrumbs::render(
                $this->breadcrumb_name,
                ...$this->breadcrumb_parameter
            );
        });

        view()->share('dashboard_active', function ($name) {
            if ($name == $this->active) {
                return 'is-active';
            }
        });

        view()->share('dashboard_title', $this->title);
    }

}
