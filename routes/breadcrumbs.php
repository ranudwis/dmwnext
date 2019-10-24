<?php

Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

Breadcrumbs::for('dashboard.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Ringkasan', route('dashboard.index'));
});

Breadcrumbs::for('dashboard.settings', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Pengaturan', route('dashboard.settings'));
});

Breadcrumbs::for('dashboard.settings.edit', function ($trail, $setting) {
    $trail->parent('dashboard.settings');
    $trail->push($setting->label, route('dashboard.settings.edit', [
        'name' => $setting->name
    ]));
});

Breadcrumbs::for('dashboard.coursegroups', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Semester', route('dashboard.coursegroups'));
});

Breadcrumbs::for('dashboard.coursegroups.create', function ($trail) {
    $trail->parent('dashboard.coursegroups');
    $trail->push('Tambah', route('dashboard.coursegroups.create'));
});

Breadcrumbs::for('dashboard.courses', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Mata Kuliah', route('dashboard.courses'));
});

Breadcrumbs::for('dashboard.courses.show', function ($trail, $course) {
    $trail->parent('dashboard.courses');
    $trail->push($course->name, route('dashboard.courses.show', ['course' => $course->slug]));
});

Breadcrumbs::for('dashboard.courses.create', function ($trail) {
    $trail->parent('dashboard.courses');
    $trail->push('Tambah', route('dashboard.courses.create'));
});
