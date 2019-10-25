<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CourseRequest;
use App\{Coursegroup, Course};

class CourseController extends DashboardController
{
    protected $title = 'Mata Kuliah';
    protected $active = 'courses';
    protected $breadcrumb_name = 'dashboard.courses';

    public function index()
    {
        $courses = Course::with('coursegroup')
            ->orderBy('coursegroup_id')
            ->orderBy('name')
            ->get()
            ->groupBy('coursegroup.name');

        return view('dashboard.courses.index', compact('courses'));
    }

    public function create()
    {
        $this->breadcrumb_name = 'dashboard.courses.create';

        $coursegroups = Coursegroup::select('id', 'name')->get();

        return view('dashboard.courses.create', compact('coursegroups'));
    }

    public function store(CourseRequest $request)
    {
        Course::create($request->all());

        return redirect()->route('dashboard.courses');
    }

    public function show(Course $course)
    {
        $this->breadcrumb_name = 'dashboard.courses.show';
        $this->breadcrumb_parameter = [$course];

        return view('dashboard.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $this->breadcrumb_name = 'dashboard.courses.edit';
        $this->breadcrumb_parameter = [$course];

        $coursegroups = Coursegroup::all();

        return view('dashboard.courses.edit', compact('coursegroups', 'course'));
    }

    public function update(CourseRequest $request, Course $course)
    {
        $course->update([
            'showed' => $request->has('showed')
        ] + $request->all());

        return redirect()->route('dashboard.courses.show', ['course' => $course->slug]);
    }
}
