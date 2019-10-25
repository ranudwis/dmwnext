<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CourseRequest;
use App\{Coursegroup, Course};

class CourseController extends DashboardController
{
    protected $active = 'courses';

    public function index()
    {
        $this->page('Mata Kuliah', 'dashboard.courses');

        $courses = Course::with('coursegroup')
            ->orderBy('coursegroup_id')
            ->orderBy('name')
            ->get()
            ->groupBy('coursegroup.name');

        return view('dashboard.courses.index', compact('courses'));
    }

    public function create()
    {
        $this->page('Tambah mata kuliah', 'dashboard.courses.create');

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
        $this->page($course->name, 'dashboard.courses.show', $course);

        return view('dashboard.courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        $this->page('Edit ' . $course->name, 'dashboard.courses.edit', $course);

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
