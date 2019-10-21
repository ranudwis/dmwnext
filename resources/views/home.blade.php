@extends('partial/main')

@section('content')
    @component('partial/header')
        @slot('class')
            is-medium is-bold is-indigo
        @endslot

        @slot('header')
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
                                        <a class="button is-white" href=" {{ route('auth.signin') }}">Masuk</a>
                                        <a class="button is-white is-outlined" href="{{ route('auth.signup') }}">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        @endslot

        <div class="container has-text-centered">
            <h2 class="title is-1">DMW++</h2>
            <p class="subtitle is-3">
                Database Modul dan Webtutor
            </p>

            <div class="field">
                <div class="control has-icons-right">
                    <input class="input is-large is-rounded" type="text" placeholder="Cari Mata Kuliah..." autofocus />

                    <span class="icon is-small is-right">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>

        @slot('footer')
            <div class="container mainfeaturelink">
                <div class="field is-grouped">
                    <div class="control">
                        <a href="" class="button is-medium is-white is-outlined">
                            <span class="icon">
                                <i class="fas fa-book fa-fw"></i>
                            </span>

                            <span>Mata Kuliah</span>
                        </a>
                    </div>
                    <div class="control">
                        <a href="" class="button is-medium is-white is-outlined">
                            <span class="icon">
                                <i class="fas fa-file-alt"></i>
                            </span>

                            <span>Webtutor</span>
                        </a>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

    <section class="section">
        <div class="container">
            <h3 class="title has-text-centered">Apa itu DMW++?</h3>

            <div class="content">
                <p>
                    DMW++ adalah website yang disediakan oleh Divisi Pendidikan Dan Pelatihan
                    Himpunan Mahasiswa Informatika Universitas Diponegoro
                </p>
            </div>
        </div>
    </section>
@endsection
