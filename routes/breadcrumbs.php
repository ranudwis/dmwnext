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
