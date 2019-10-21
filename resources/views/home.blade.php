@extends('partial/main')

@section('content')
    @component('partial/header')
        @slot('class')
            is-primary is-medium is-bold
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
