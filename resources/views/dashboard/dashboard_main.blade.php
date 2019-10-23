<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> {{ $dashboard_title ?? 'Dashboard' }} | DMWDashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome-5.9.0/css/all.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>

    <body class="admin">
        <nav class="navbar is-white navbar-dashboard">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item brand-text" href="{{ route('dashboard.index') }}">
                        DMWDashboard
                    </a>

                    <div class="navbar-burger burger" data-target="navMenu">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </div>
                </div>

                <div id="dashboardMenu" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="{{ route('home') }}">
                            Home
                        </a>
                        <a class="navbar-item" href="">
                            Modul
                        </a>
                        <a class="navbar-item" href="">
                            Web Tutorial
                        </a>
                        <a class="navbar-item" href="">
                            ASK
                        </a>
                    </div>

                    <div class="navbar-end">
                        <a class="navbar-item" href="{{ route('signout') }}">
                            ({{ auth()->user()->name }})
                            Keluar
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="columns">
                <div class="column is-3 ">
                    <aside class="menu">
                        <p class="menu-label">
                            DMW++
                        </p>

                        <ul class="menu-list">
                            <li>
                                <a class="{{ $dashboard_active('dashboard') }}" href="{{ route('dashboard.index') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="{{ $dashboard_active('settings') }}" href="{{ route('dashboard.settings') }}">
                                    Pengaturan
                                </a>
                            </li>
                        </ul>

                        <p class="menu-label">
                            Modul
                        </p>

                        <ul class="menu-list">
                            <li>
                                <a href="">Kategori</a>
                                <a href="">Mata kuliah</a>
                                <a href="">Soal</a>
                                <a href="">Pembahasan</a>
                                <a href="">Modul kuliah</a>
                            </li>
                        </ul>

                        <p class="menu-label">
                            Webtutor
                        </p>

                        <ul class="menu-list">
                            <li>
                                <a href="">Artikel</a>
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="column is-9">
                    {{ $breadcrumbs() }}
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
