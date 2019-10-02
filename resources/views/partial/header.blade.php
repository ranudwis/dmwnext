<div class="hero {{ $class }}">
    <div class="hero-head">
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="">
                        <img src="{{ asset('images/logo.jpg') }}" />
                        DMW++
                    </a>

                    <a class="navbar-burger burger" data-target="mainNavbar">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="mainNavbar" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="">Mata Kuliah</a>
                        <a class="navbar-item" href="">Web Tutorial</a>
                        <a class="navbar-item" href="">ASK</a>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                <a class="button is-white" href="">Masuk</a>
                                <a class="button is-white is-outlined" href="">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body">
        {{ $slot }}
    </div>

    {{ $footer ?? null }}
</div>
