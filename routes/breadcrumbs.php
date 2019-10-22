<?php

Breadcrumbs::for('dashboard_home', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

Breadcrumbs::for('dashboard', function ($trail, $page, $url) {
    $trail->parent('dashboard_home');
    $trail->push($page, $url);
});
