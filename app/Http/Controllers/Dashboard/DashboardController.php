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

        // dashboard_title shared variable made as function because page() function
        // to change the title is called after class is constructed so that
        // the true title value is called after page() function called
        view()->share('dashboard_title', function () {
            return $this->title;
        });
    }

    protected function page($title, $breadcrumb_name = 'dashboard', ...$breadcrumb_parameter)
    {
        $this->title = $title;
        $this->breadcrumb_name = $breadcrumb_name;
        $this->breadcrumb_parameter = $breadcrumb_parameter;
    }
}
