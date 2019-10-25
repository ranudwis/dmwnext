<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coursegroup;

class CoursegroupController extends DashboardController
{
    protected $active = 'coursegroups';

    public function index()
    {
        $this->page('Semester', 'dashboard.coursegroups');

        $coursegroups = Coursegroup::all();

        return view('dashboard.coursegroups.index', compact('coursegroups'));
    }

    public function create()
    {
        $this->page('Tambah semester', 'dashboard.coursegroups.create');

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
