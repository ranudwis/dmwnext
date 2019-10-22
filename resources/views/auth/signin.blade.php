@extends('auth/auth_main')

@section('form')
<form method="post" action="{{ route('auth.signin') }}">
    @csrf

    <div class="field">
        <label class="label">Username</label>
        <div class="control">
            <input type="text" class="input" name="username" value="{{ old('username') }}" autofocus />
        </div>
    </div>

    <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input type="password" class="input" name="password" />
        </div>
    </div>

    <div class="field">
        <div class="control">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <button class="button is-primary">Masuk</button>
                    </div>
                    <div class="level-item">
                        <p>
                            Belum punya akun? <a href="{{ route('auth.signup') }}">Daftar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
