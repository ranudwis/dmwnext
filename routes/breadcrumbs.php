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
