<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coursegroup;

class CoursegroupController extends DashboardController
{
    protected $title = 'Semester';
    protected $active = 'coursegroups';
    protected $breadcrumb_name = 'dashboard.coursegroups';

    public function index()
    {
        $coursegroups = Coursegroup::all();

        return view('dashboard.coursegroups.index', compact('coursegroups'));
    }

    public function create()
    {
        $this->breadcrumb_name = 'dashboard.coursegroups.create';

        return view('dashboard.coursegroups.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Coursegroup::create($request->all());

        return redirect()->route('dashboard.coursegroups');
    }
}
