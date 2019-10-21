@extends('partial/main')

@section('content')

<div class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column">
                    <h1 class="title">Daftar DMW++</h1>
                    <p class="subtitle">
                        Gunakan seluruh fitur DMW++. Kolaborasi untuk Informatika.
                    </p>
                </div>

                <div class="column">
                    <form method="post" action="{{ route('auth.signup') }}">
                        @csrf

                        <div class="field">
                            <label class="label">Nama</label>
                            <div class="control">
                                <input type="text" class="input" name="name" value="{{ old('name') }}" autofocus />
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">NIM</label>
                            <div class="control">
                                <input type="text" class="input" name="id_number" value="{{ old('id_number') }}" />
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input type="email" class="input" name="email" value="{{ old('email') }}" />
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input type="password" class="input" name="password" />
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Ulangi Password</label>
                            <div class="control">
                                <input type="password" class="input" name="password_confirmation" />
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button class="button is-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
