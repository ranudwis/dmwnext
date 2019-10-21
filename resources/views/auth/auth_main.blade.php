@extends('partial/main')

@section('content')
<div class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column">
                    <h1 class="title">Bergabung dengan DMW++</h1>
                    <p class="subtitle">
                        Gunakan seluruh fitur DMW++. Kolaborasi untuk Informatika.
                    </p>
                </div>

                <div class="column">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
